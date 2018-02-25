<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:48:04
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:8397788495a7f4c744f6333-53339349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8837ae23d6f1150478f2f7140b2fec4415d8cda' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/my.nav.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8397788495a7f4c744f6333-53339349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4c7451e364_29781508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4c7451e364_29781508')) {function content_5a7f4c7451e364_29781508($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>