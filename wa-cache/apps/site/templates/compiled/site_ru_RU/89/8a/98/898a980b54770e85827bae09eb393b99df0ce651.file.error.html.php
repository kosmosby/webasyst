<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:06:02
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:12958009865a7ea7eabb4a90-00160080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898a980b54770e85827bae09eb393b99df0ce651' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/error.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12958009865a7ea7eabb4a90-00160080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7eac26f78_65052893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7eac26f78_65052893')) {function content_5a7ea7eac26f78_65052893($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>