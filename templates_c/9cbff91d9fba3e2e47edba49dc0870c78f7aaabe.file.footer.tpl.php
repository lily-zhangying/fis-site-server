<?php /* Smarty version Smarty-3.1.13, created on 2014-04-02 10:53:46
         compiled from "/Users/lily/work/fis-doc/fis-site-server/template/fis-site/widget/footer/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1305752030533bec3a48c4b2-18535244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cbff91d9fba3e2e47edba49dc0870c78f7aaabe' => 
    array (
      0 => '/Users/lily/work/fis-doc/fis-site-server/template/fis-site/widget/footer/footer.tpl',
      1 => 1396435985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1305752030533bec3a48c4b2-18535244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'en' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_533bec3a499fc8_11885205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533bec3a499fc8_11885205')) {function content_533bec3a499fc8_11885205($_smarty_tpl) {?><div id="footer">
    <div class="container clearfix">
        <div class="weixin">
            <img class="img-rounded" src="/static/fis-site/widget/footer/qrcode.jpg" alt="" />
            <p><?php if ($_smarty_tpl->tpl_vars['en']->value){?>weixin account<?php }else{ ?>微信公共账号<?php }?></p>
        </div>

        <p class="copyright">Copyright &copy; 2014. <a href="mailto:fe@baidu.com">FE@Baidu</a></p>
        <p>Hi<?php if ($_smarty_tpl->tpl_vars['en']->value){?>&nbsp;Group:&nbsp;<?php }else{ ?>群：<?php }?>1383676</p>
        <p>QQ<?php if ($_smarty_tpl->tpl_vars['en']->value){?>&nbsp;Group:&nbsp;<?php }else{ ?>群：<?php }?>315973236</p>

        <div class="friend-links">
            <span><?php if ($_smarty_tpl->tpl_vars['en']->value){?>Friend Links:&nbsp;<?php }else{ ?>友情链接：<?php }?></span>
            <ul>
                <li><a href="http://fex.baidu.com">Fex</a></li>
                <li><a href="http://hunter.baidu.com">Hunter</a></li>
                <li><a href="http://ueditor.baidu.com">Ueditor</a></li>
                <li><a href="http://gmu.baidu.com">Gmu</a></li>
                <li><a href="http://dp.baidu.com">Dp</a></li>
                <li><a href="http://gmuteam.github.io/webuploader/">Web Uploader</a></li>
            </ul>
        </div>
    </div>
</div><?php }} ?>