<?php
ini_set('display_errors', 0);
error_reporting(0);

$root = dirname(__FILE__);

/*require_once($root. '/IpUtil.php');

$internalMachine =  array(
    //beijing
    '61.135.165.142-190',
    '61.135.169.68-94',
    '220.181.50.206-254',
    '220.181.38.100-126',
    //shangYan
    '58.246.21.78',
    '210.22.139.126',
    '211.144.207.81-86',
    '124.74.245.177-181',
    //shenYan
    '113.106.166.97',
    '112.95.224.74',
    //fushan
    '119.145.143.168',
    //meiYan
    '24.104.69.2',
    //'127.0.0.1'
);

function getClientIp() {
    if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif( isset($_SERVER['HTTP_CLIENTIP']) ) {
        $ip = $_SERVER['HTTP_CLIENTIP'];
    }
    elseif( isset($_SERVER['REMOTE_ADDR']) ) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    elseif( getenv('HTTP_X_FORWARDED_FOR') ) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif( getenv('HTTP_CLIENTIP') ) {
        $ip = getenv('HTTP_CLIENTIP');
    }
    elseif( getenv('REMOTE_ADDR') ) {
        $ip = getenv('REMOTE_ADDR');
    }
    else {
        $ip = '127.0.0.1';
    }

    $pos = strpos($ip, ',');
    if( $pos > 0 ) {
        $ip = substr($ip, 0, $pos);
    }

    return trim($ip);
}

$useNewVersion = false;

if ( preg_match('/(?:\?|&)preview=(\d+)/i', $_SERVER[ 'REQUEST_URI' ], $matches ) ) {
    $val = intval($matches[1]);

    if ( $val ) {
        setcookie("preview", 1, time() + 3600 * 24);
    } else {
        unset( $_COOKIE['preview'] );
        @setcookie("preview", null, -1);
    }

    $useNewVersion = $val;

} else if ( !empty($_COOKIE[ 'preview' ]) ) {
    $useNewVersion = intval( $_COOKIE[ 'preview' ] );
}


if ( !$useNewVersion ) {
    $clientIp = getClientIp(); // $_SERVER['HTTP_CLIENTIP'];
    $isFromInternal = false;

    foreach ($internalMachine as $key => $value) {
        if ( IpUtil::inRange( $clientIp, $value ) ) {
            $isFromInternal = true;
            break;
        }
    }

    $useNewVersion = $isFromInternal;
}


if ( $useNewVersion ) {*/
    // header('location: http://fe.baidu.com/doc/fis/');
    // exit;

    $root .= DIRECTORY_SEPARATOR;
    require_once $root . "libs" . DIRECTORY_SEPARATOR . "util.php";

    $dirs = array_filter(glob('template/docs/*'), 'is_dir');

    //分析url
    $path = $_SERVER['REQUEST_URI'];
    _render_static($root, $path);

    $url_info = _get_url_info($path, $root, $_GET);

    //获取URL对应的模板数据
    $data = array();
    if($url_info['type'] != 'error'){
        $data = _get_data($root, $url_info, $data);
    }
    _get_nav_data($data, $url_info);
    if ( preg_match( '/^\/blog/i', $url_info['path'] ) ) {
        include('libs/blog.php');
    }

    //渲染对应的tpl
    _render_tpl($root, $url_info, $data);

/*} else {
    require_once ($root . '/smarty/Smarty.class.php');
    $smarty = new Smarty();
    $smarty->setTemplateDir($root . '/template');
    $smarty->setConfigDir($root . '/config');
    $smarty->addPluginsDir($root . '/plugin');
    $smarty->setLeftDelimiter('{%');
    $smarty->setRightDelimiter('%}');
    $smarty->assign(include($root . '/data/index.php'));
    $smarty->display('page/index.tpl');
}*/
// echo '<!--'. print_r($_SERVER, true).'-->';