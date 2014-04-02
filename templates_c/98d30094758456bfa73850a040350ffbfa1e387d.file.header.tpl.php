<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 10:53:46
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/widget/header/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519415959533bec3a471fa4-29003406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d30094758456bfa73850a040350ffbfa1e387d' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/widget/header/header.tpl',
      1 => 1396435985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519415959533bec3a471fa4-29003406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navs' => 0,
    'link' => 0,
    'en' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533bec3a489684_07378671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533bec3a489684_07378671')) {function content_533bec3a489684_07378671($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="/" title="Fis">FIS</a>
        </div>
        <div class="collapse navbar-collapse">
            <?php if ($_smarty_tpl->tpl_vars['navs']->value){?>
            <ul class="nav navbar-nav">
                <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                    <li
                    <?php if ($_smarty_tpl->tpl_vars['link']->value['active']){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php } ?>
            </ul>
            <?php }?>

            <ul class="nav navbar-nav navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['en']->value){?>
                <li><a href="/">中文版</a></li>
                <?php }else{ ?>
                <li><a href="/en">English</a></li>
                <?php }?>
                <li><a target="_blank" href="https://github.com/fex-team/fis-plus">Github</a></li>
            </ul>
        </div>
    </div>
</div><?php }} ?>