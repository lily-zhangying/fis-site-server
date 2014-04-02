<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 06:58:45
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/index_en.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1177034004533a9058bac8c6-35439486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4dbc30b666acc9dfeef47585f9763141654f238' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/index_en.tpl',
      1 => 1396421341,
      2 => 'file',
    ),
    'd9e7ec7846152dcd57dbbaae6006898165696fd5' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/layout.tpl',
      1 => 1396421341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1177034004533a9058bac8c6-35439486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533a9058c24c08_16986789',
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'pageId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533a9058c24c08_16986789')) {function content_533a9058c24c08_16986789($_smarty_tpl) {?><!DOCTYPE html>

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
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('navs'=>$_smarty_tpl->tpl_vars['navs_en']->value,'en'=>true), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/header/header.tpl", $_smarty_tpl->smarty);?>

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
            F.I.S is the front-end integrated solution which included automation tool, development framework, development environment. Our mission is to give you an advanced solution for developing web sites and applications without worrying about framework and performance.
        </div>

        <div id="why" class="en">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-edit"></i> Create</h4>
                    Scaffolds out project, pages, modules, plug-ins and other resources.
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-transfer"></i> Compile</h4>
                    Performing repetitive tasks like minification, compilation, unit testing, linting, etc, automatic processing of embedded static resources, replacing the path, md5 timestamp.
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-pause"></i> Debug</h4>
                    Convenient local debugging environment, built-in debugging servers, supporting data and the request simulation, file monitoring.
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-stats"></i> Framework</h4>
                    Effectively monitor resource loading conditions and automatically optimize site performance.
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-resize-full"></i> Extend</h4>
                    Flexible and scalable, plug-in system mechanisms
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-send"></i> Deploy</h4>
                    Enable greater speed and frequency for the delivery of project.
                </div>
            </div>
        </div>

        

        
    </div>






    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('en'=>true), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
<?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load('fis-site:page/index_en.tpl',$_smarty_tpl->smarty);?></div>
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