<?php

function _normalize($path) {
    $normal_path = preg_replace(
        array('/[\/\\\\]+/', '/\/\.\//', '/^\.\/|\/\.$/', '/\/$/'),
        array('/', '/', '', ''),
        $path
    );
    $path = $normal_path;
    do {
        $normal_path = $path;
        $path = preg_replace('/[^\\/\\.]+\\/\\.\\.(?:\\/|$)/', '', $normal_path);
    } while ($path != $normal_path);
    $path = preg_replace('/\/$/', '', $path);
    return $path;
}

/*
* @return array(
*  	'tpl' => 'fis-site/page/index.tpl'
*	'md_dir' => 'docs/index'
*	'md_index'	=>	'docs/index/index.md'
*	'query'	=>
* ）
*/
function _get_url_info($path, $root, $get){
	$url = parse_url($path);
	$url['path'] = urldecode($url['path'][0] == '/' ? $url['path'] : rtrim($url['path'], '/'));
	$url_paths = explode('/', $url['path']);
	$route_conf = array();
	$type_info = array();

	require_once($root . 'config/route.php');
	if($route_conf[$url['path']]){
		$type_info = $route_conf[$url['path']];
	}elseif($url_paths[1] == 'solutions' || $url_paths[1] == 'cases'){
		$type_info = _get_type_info('/detail', $route_conf, $url, $root);
	}elseif($url_paths[1] == 'developer') {
		$type_info = _get_type_info('/developer', $route_conf, $url, $root);
	}else if($url_paths[1] == 'userdoc') {
        $type_info = _get_type_info('/userdoc', $route_conf, $url, $root);
    }else if($url_paths[1] == 'userdoc_en'){
        $type_info = _get_type_info('/userdoc', $route_conf, $url, $root, 'en');
    }

	$ret = array_merge($url, $type_info);
	return $ret;
}

function _get_type_info($type, $route_conf, $url, $root, $lang = null){
	$path = 'docs' . $url['path'];
	$file_path = $root . 'template/docs' . $url['path'];

	if(is_file($file_path . '.html')) {
		$path = $path . '.html';
        $yml_data = _get_yml_data($file_path . '.html', $root);
        if ($yml_data['type']) {
            $type = '/' . $yml_data['type'];
        }
	}else if (is_file($file_path . '/index.html')) {
		$path = $path . '/index.html';
	}else{
		return $route_conf['/error'];
	}
	$tmp = explode('/', $url['path']);
	$type_info = $route_conf[$type];
	$type_info['md_path'] = $path;
    $type_info['md_dir'] = dirname($path);
	$type_info['link'] = '/' . $tmp[1];
	if($type == '/developer' || $type == '/userdoc'){
		$type_info['active'] = $url['path'];
	}
    if($lang){
        $type_info['lang'] = $lang;
        $tpl = $type_info['tpl'];
        $type_info['tpl'] = substr($tpl, 0, strrpos($tpl, '.')) . '_' . $lang .'.tpl';
    }
	return $type_info;
}
/*
* 获取模板对应的数据
*/
function _get_data($root, $url_info){
	$data = array();
	$file_path = $root . 'template/' . $url_info['md_path'];
	// $data['second_title'] = _get_second_title($file_path);

	//如果是list页面，需要遍历目录获取list信息
	if($url_info['type'] == 'list'){
		$data['list'] = _get_list_info($root, $url_info);
	} elseif($url_info['type'] == 'index') {
		# code...
	} elseif($url_info['type'] == 'developer'){
		//获取developer文档列表
		$data['developer'] = _get_developer_list_data($root, $url_info);
	} else if ( $url_info['type'] == 'userdoc' ) {
        $data['developer'] = _get_userdoc_list_data($root, $url_info, $url_info['lang']); 
    }
	$data['title'] = $url_info['title'];

	if(is_file($file_path)){
		$yml_data = _get_yml_data($file_path, $root);
		$data = array_merge($data, $yml_data);
    } else if( count($data['sidenavs'])) {
        $yml_data = $data['sidenavs'][0];
        $data['sidenavs'][0]['active'] = true;
        $data = array_merge($data, $yml_data);
    }
    //将urlpath赋值给页面的猴子点击的PAGEID
    $data['pageId'] = $url_info['path'];
	return $data;
}

/*
* 获取文档内容中的头部注释yml键值
*/
function _get_yml_data($file, $root){
    $content = file_get_contents($file);
	$ymlRegx = '/^<\!\-+([\s\S]+?)\-+>/';
	$data = array();

    if (preg_match($ymlRegx, $content, $mathes)) {
        if($mathes[1]) {
        	require_once($root . 'libs/Spyc.php');
            $data = Spyc::YAMLLoadString($mathes[1]);
        }
        $content = preg_replace($ymlRegx, '', $content);
    }

    $data['content'] = trim($content);
    return $data;
}

function _get_nav_data(&$data, $url_info){
	$data['navs'] = array(
	    // '/' => array(
	    //     'href' => '/',
	    //     'title' => '首页'
	    // ),
	    '/userdoc' => array(
	        'href' => '/userdoc',
	        'title' => '用户文档'
	    ),
	    '/developer' => array(
	        'href' => '/developer',
	        'title' => '扩展'
	    ),
        '/blog' => array(
            'href' => '/blog',
            'title' => 'Blog'
        ),
        '/cases' => array(
            'href' => '/cases',
            'title' => '合作案例'
        )
	);
    $data['navs_en'] = array(
        '/userdoc_en' => array(
            'href' => '/userdoc_en',
            'title' => 'Documentation'
        )
    );
	if(isset($data['navs'][$url_info['link']])){
		$data['navs'][$url_info['link']]['active'] = 'true';
	}
    if(isset($data['navs_en'][$url_info['link']])){
        $data['navs_en'][$url_info['link']]['active'] = 'true';
    }
}

/*
* 遍历目录获取list信息，同时获取desc信息
*/
function _get_list_info($root, $url_info){
	$data = array();
	$dirs = array_filter(glob('template/' . $url_info['md_dir'] . '/*'), 'is_dir');
	foreach ($dirs as $key => $value) {
		if($value == 'template/docs/solutions/base'){
			continue;
		}
		$file_path = $root . $value . '/desc.html';
		if(!is_file($file_path)){
			continue;
		}
		$dir_tmp = explode('/', dirname($file_path));
		$dir_name = $dir_tmp[count($dir_tmp)-1];

		$yml_data = _get_yml_data($file_path, $root);
		$yml_data['link'] = $url_info['link'] . '/' . $dir_name;
		$data[$dir_name] = $yml_data;
	}
    usort($data, 'cmp');
	return $data;
}

function cmp($a, $b) {
    return $b['weight'] - $a['weight'];
}

/*
* 获取开发者中心列表
*/
function _get_developer_list_data($root, $url_info){
	$data = array();
	$dir = $root . 'template/' . $url_info['md_dir'] . '/';
	//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
    $handler = opendir($dir);
    while (($filename = readdir($handler)) !== false) {
    	if ($filename != "." && $filename != "..") {
    		$file_path = $dir . $filename;
    		$yml_data = _get_yml_data($file_path, $root);
    		if($yml_data['type'] == 'detail'){
    			continue;
    		}
    		$link_path = '/developer/' . urlencode(basename($file_path, '.html'));
    		$key = substr($filename, 0, strpos($filename, '.'));
    		$yml_data['link_path'] = $link_path;
            if($link_path == $url_info['active']){
    			$yml_data['active'] = 'true';
    		}

            $yml_data['path'] = $file_path;
    		$data[] = $yml_data;
       	}
   	}
   	closedir($handler);

	usort($data, 'cmp');
	return $data;
}


function _get_userdoc_list_data($root, $url_info, $lang = null) {
    $data = array();
    $dir = $root . 'template/' . $url_info['md_dir'] . '/';
    //获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
    $handler = opendir($dir);
    while (($filename = readdir($handler)) !== false) {
        if ($filename != "." && $filename != "..") {
            $file_path = $dir . $filename;
            $yml_data = _get_yml_data($file_path, $root);
            if(!$yml_data['title']){
                continue;
            }

            $filekey = preg_replace('/\.\w+$/', '', $filename);
            if($lang){
                $link_path = '/userdoc_' . $lang . '/' .urlencode($filekey);
            }else{
                $link_path = '/userdoc/' . urlencode($filekey);
            }
            $key = substr($filename, 0, strpos($filename, '.'));
            $yml_data['link_path'] = $link_path;

            if('/userdoc/' . $filekey == $url_info['active']){
                $yml_data['active'] = 'true';
            }
            
            if($url_info['lang'] && ('/userdoc_' . $url_info['lang'] . '/' . $filekey) == $url_info['active']){
                $yml_data['active'] = 'true';
            }
            $data[] = $yml_data;
        }
    }
    closedir($handler);

    usort($data, 'cmp');
    return $data;
}

function _render_tpl($root, $url_info, $data){
	require_once ($root . 'smarty/Smarty.class.php');
	$smarty = new Smarty();
	$default_conf = array(
	    'template_dir' => 'template',
	    'config_dir' => 'config',
	    'plugins_dir' => array( 'plugin' ),
	    'left_delimiter' => '{%',
	    'right_delimiter' => '%}'
	);
	if(file_exists($root . '/config/smarty.conf')){
	    $user_conf = parse_ini_file($root . '/config/smarty.conf');
	    if(!empty($user_conf)){
	        $default_conf = array_merge($default_conf, $user_conf);
	    }
	}
	$smarty->setTemplateDir($root . $default_conf['template_dir']);
	$smarty->setConfigDir($root . $default_conf['config_dir']);
	foreach ($default_conf['plugins_dir'] as $dir) {
	    $smarty->addPluginsDir($root . $dir);
	}
	$smarty->setLeftDelimiter($default_conf['left_delimiter']);
	$smarty->setRightDelimiter($default_conf['right_delimiter']);
	$smarty->assign($data);
	// var_dump($url_info);exit();
	$smarty->display($url_info['tpl']);
}

function _render_static($root, $path){
	$len = strlen($path) - 1;
    if('/' === $path{$len}){
        $path = substr($path, 0, $len);
    }
    $split = explode('/', $path);
    if('static' === $split[1]){
        $file = $root . substr($path, 1);
        if(is_file($file)){
            $content_type = 'Content-Type: ';
            $pos = strrpos($file, '.');
            if(false !== $pos){
                $ext = substr($file, $pos + 1);
                $MIME = array(
                    'bmp' => 'image/bmp',
                    'css' => 'text/css',
                    'doc' => 'application/msword',
                    'dtd' => 'text/xml',
                    'gif' => 'image/gif',
                    'hta' => 'application/hta',
                    'htc' => 'text/x-component',
                    'htm' => 'text/html',
                    'html' => 'text/html',
                    'xhtml' => 'text/html',
                    'ico' => 'image/x-icon',
                    'jpe' => 'image/jpeg',
                    'jpeg' => 'image/jpeg',
                    'jpg' => 'image/jpeg',
                    'js' => 'text/javascript',
                    'json' => 'application/json',
                    'mocha' => 'text/javascript',
                    'mp3' => 'audio/mp3',
                    'mp4' => 'video/mpeg4',
                    'mpeg' => 'video/mpg',
                    'mpg' => 'video/mpg',
                    'manifest' => 'text/cache-manifest',
                    'pdf' => 'application/pdf',
                    'png' => 'image/png',
                    'ppt' => 'application/vnd.ms-powerpoint',
                    'rmvb' => 'application/vnd.rn-realmedia-vbr',
                    'rm' => 'application/vnd.rn-realmedia',
                    'rtf' => 'application/msword',
                    'svg' => 'image/svg+xml',
                    'swf' => 'application/x-shockwave-flash',
                    'tif' => 'image/tiff',
                    'tiff' => 'image/tiff',
                    'txt' => 'text/plain',
                    'vml' => 'text/xml',
                    'vxml' => 'text/xml',
                    'wav' => 'audio/wav',
                    'wma' => 'audio/x-ms-wma',
                    'wmv' => 'video/x-ms-wmv',
                    'woff' => 'image/woff',
                    'xml' => 'text/xml',
                    'xls' => 'application/vnd.ms-excel',
                    'xq' => 'text/xml',
                    'xql' => 'text/xml',
                    'xquery' => 'text/xml',
                    'xsd' => 'text/xml',
                    'xsl' => 'text/xml',
                    'xslt' => 'text/xml'
                );
                $content_type .= $MIME[$ext] ? $MIME[$ext] : 'application/x-' . $ext;
            } else {
                $content_type .= 'text/plain';
            }
            header($content_type);
            echo file_get_contents($file);
            exit();
        } else {
            echo '';
        }
    }
}