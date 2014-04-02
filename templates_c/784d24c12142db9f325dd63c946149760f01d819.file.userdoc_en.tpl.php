<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 07:07:45
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/userdoc_en.tpl" */ ?>
<?php /*%%SmartyHeaderCode:726471258533a888d218bd2-99213621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '784d24c12142db9f325dd63c946149760f01d819' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/userdoc_en.tpl',
      1 => 1396422462,
      2 => 'file',
    ),
    'd9e7ec7846152dcd57dbbaae6006898165696fd5' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/page/layout.tpl',
      1 => 1396422462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '726471258533a888d218bd2-99213621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533a888d294546_30182912',
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'pageId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533a888d294546_30182912')) {function content_533a888d294546_30182912($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/lily/work/fis-doc/fis-site-server/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/lily/work/fis-doc/fis-site-server/smarty/plugins/modifier.replace.php';
?><!DOCTYPE html>

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
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('navs'=>$_smarty_tpl->tpl_vars['navs_en']->value,'en'=>true), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/header/header.tpl", $_smarty_tpl->smarty);?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-users"></span>User Document</h1>
            <p class="desc"></p>
        </div>
    </div>

    <div id="post-container" class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="fis-sidebar">
                    <ul class="nav nav-pills nav-stacked">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['developer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>class="active"<?php }?>>
                            <?php $_smarty_tpl->tpl_vars['link_path'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['link_path'], null, 0);?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link_path']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>
                            <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['toc'], 'none');?>

                            <?php }else{ ?>
                            <?php echo smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['toc'], 'none'),'"#',"\"".((string)$_smarty_tpl->tpl_vars['link_path']->value)."#");?>

                            <?php }?>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="page-header"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1></div>
                <div class="page-container">
                    <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['content']->value, 'none');?>

                </div>
            </div>
        </div>
    </div>
    <?php ob_start();?>
        require('fis-site:widget/js/sidebar.js').init('.fis-sidebar');
    <?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}if(FISResource::$cp) {if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){FISResource::addScriptPool($script);FISResource::$arrEmbeded[] = FISResource::$cp;}} else {FISResource::addScriptPool($script);}}FISResource::$cp = null;?>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("fis-site:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."fis-site:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("fis-site:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
<?php if(!class_exists('FISResource', false)){require_once('/Users/lily/work/fis-doc/fis-site-server/plugin/FISResource.class.php');}FISResource::load('fis-site:page/userdoc_en.tpl',$_smarty_tpl->smarty);?></div>
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