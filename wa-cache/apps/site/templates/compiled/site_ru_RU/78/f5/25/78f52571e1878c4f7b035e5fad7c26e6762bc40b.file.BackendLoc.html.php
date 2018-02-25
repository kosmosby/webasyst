<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:06:19
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:14906723875a7ea7fbe5f817-32714400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f52571e1878c4f7b035e5fad7c26e6762bc40b' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14906723875a7ea7fbe5f817-32714400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7fbec81a8_35069002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7fbec81a8_35069002')) {function content_5a7ea7fbec81a8_35069002($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>