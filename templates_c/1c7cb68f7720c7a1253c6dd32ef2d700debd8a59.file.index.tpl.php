<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 10:53:46
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426629801533bec3a4159d7-36417265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7cb68f7720c7a1253c6dd32ef2d700debd8a59' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/index.tpl',
      1 => 1396435985,
      2 => 'file',
    ),
    'd9e7ec7846152dcd57dbbaae6006898165696fd5' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/layout.tpl',
      1 => 1396435985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426629801533bec3a4159d7-36417265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'pageId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533bec3a469b57_84574411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533bec3a469b57_84574411')) {function content_533bec3a469b57_84574411($_smarty_tpl) {?><!DOCTYPE html>

<?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("fis-site:static/js/mod.js", $_smarty_tpl->smarty)); ?><html>
    
    <head>
        <meta charset="utf-8"/>
        <meta content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" name="description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/static/fis-site/page/favicon.ico">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - F.I.S</title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/bootstrap.css",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/bootstrap-theme.css",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/font-awesome.css",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/syntax.css",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/global.css",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/js/jquery-1.10.2.js",$_smarty_tpl->smarty);?>
        <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/js/bootstrap.js",$_smarty_tpl->smarty);?>
        <script>
            void function(e,t,n,a,o,i,m){e.alogObjectName=o,e[o]=e[o]||function(){(e[o].q=e[o].q||[]
                ).push(arguments)},
            e[o].l=e[o].l||+new Date,i=t.createElement(n),
            i.asyn=1,i.src=a,m=t.getElementsByTagName(n)[0],m.parentNode.insertBefore(i,m)}(window,document,"script","http://img.baidu.com/hunter/alog.min.js","alog");
        </script>
        
    <link href="http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">

    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/front.css",$_smarty_tpl->smarty);?>

    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
    
    <body>
        <div id="wrapper">
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/header/header.tpl", $_smarty_tpl->smarty);?>

    <!-- <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-cogs"></span>F.I.S</h1>
            <p class="desc">Front-end Integrated Solution</p>
        </div>
    </div> -->

    <div class="coolwall">
        <div class="container">
            <span class="fa fa-cogs"></span>
            <h1>F.I.S</h1>
            <p class="desc">Front-end Integrated Solution
            </p>
        </div>
    </div>

    <div class="container fis-features">
        <div id="what">
            FIS是基于工具、开发框架、本地开发环境为一体的前端解决方案。面向工程化，简化开发、提测、部署流程，促进开发流程中的协作，来达到更快、更可靠、低成本的自动化项目交付；面向自动化，减少人工管理静态资源成本和风险，全自动优化页面性能、减少服务器开销；面向定制化，包括PC、Mobile、I18n等大量个性化解决方案。
        </div>

        <div id="why">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-edit"></i> Create</h4>
                    快速搭建项目，提供灵活的脚手架工具，辅助项目开发，能够生成项目、页面、模块、插件等各类资源。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-transfer"></i> Compile</h4>
                    自动化构建，支持对文件进行编译、校验、压缩、合并、优化，自动处理静态资源内嵌、路径替换、md5时间戳、依赖关系。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-pause"></i> Debug</h4>
                    便捷的本地调试环境，内置调试服务器，支持数据及请求模拟、文件监听、浏览器自动刷新。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-stats"></i> Framework</h4>
                    基于模块化的高性能前后端开发框架，可以根据终端灵活控制资源输出策略，有效监控资源加载情况并自动优化网站性能。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-resize-full"></i> Extend</h4>
                    灵活扩展性，插件系统机制，支持对构建过程和命令功能进行扩展。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-send"></i> Deploy</h4>
                    一键部署，满足任何前后端框架的发布部署，简化部署流程，来达到更快、更可靠、低成本的自动化项目交付。
                </div>
            </div>
        </div>

        

        
    </div>






    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
<?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load('fis-site:page/index.tpl',$_smarty_tpl->smarty);?></div>
        <script>
            alog("set", "alias", {
                monkey: "http://img.baidu.com/hunter/alog/monkey.min.js",
                element: "http://img.baidu.com/hunter/alog/element.min.js"
            });

            //引入Monkey
            alog("require", ["monkey", "element"], function(monkey, element){
                //如果本产品线的区块打点使用monkey而不是alog-group，则需要加上下面一行代码
                //element.an("group", "monkey");

                monkey.create({
                    page: "<?php echo $_smarty_tpl->tpl_vars['pageId']->value;?>
", //填写页面的Monkey pageId
                    pid: "241", 
                    p: "241", //log平台为每个产品线分的id
                    hid: "805", //Monkey实验的ID
                    postUrl: "http://nsclick.baidu.com/u.gif",
                    reports: {
                        refer: 1,
                        staytime: 1
                    }
                });
            });
            alog("monkey.send", "pageview", { now: +new Date });
        </script>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load('fis-site:page/layout.tpl',$_smarty_tpl->smarty);?></body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>