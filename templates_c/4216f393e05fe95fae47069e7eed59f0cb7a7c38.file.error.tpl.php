<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 07:05:57
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:383322400533a936e759aa7-49969183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4216f393e05fe95fae47069e7eed59f0cb7a7c38' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/error.tpl',
      1 => 1396422354,
      2 => 'file',
    ),
    'd9e7ec7846152dcd57dbbaae6006898165696fd5' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/layout.tpl',
      1 => 1396422354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '383322400533a936e759aa7-49969183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533a936e7bc993_62083382',
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'pageId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533a936e7bc993_62083382')) {function content_533a936e7bc993_62083382($_smarty_tpl) {?><!DOCTYPE html>

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
        
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load("fis-site:static/css/front.css",$_smarty_tpl->smarty);?>

    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
    
    <body>
        <div id="wrapper">
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['navs']->value), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/header/header.tpl", $_smarty_tpl->smarty);?>

    <div id="post-container" class="container">
        <div class="page-header"><h1>404</h1></div>
        <div class="container page-container">
            <p>你请求的页面已不存在， 点此<a href="/">回到首页</a>。</p>
        </div>
    </div>

    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>

<?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load('fis-site:page/error.tpl',$_smarty_tpl->smarty);?></div>
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