<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:48:04
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:21219255025a7f4c744355d0-20383238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a70b5667be643d54e906a68979c6d06753b2178' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/themes/default/my.nav.html',
      1 => 1458026806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21219255025a7f4c744355d0-20383238',
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
  'unifunc' => 'content_5a7f4c744a72e0_69134773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4c744a72e0_69134773')) {function content_5a7f4c744a72e0_69134773($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="blog <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?>
<?php }} ?>