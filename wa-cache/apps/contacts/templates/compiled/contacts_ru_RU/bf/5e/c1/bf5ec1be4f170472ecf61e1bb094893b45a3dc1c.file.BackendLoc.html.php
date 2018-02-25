<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:14
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:11414519615a7ff9762bc5d1-53666730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5ec1be4f170472ecf61e1bb094893b45a3dc1c' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11414519615a7ff9762bc5d1-53666730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff976314ce2_45275478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff976314ce2_45275478')) {function content_5a7ff976314ce2_45275478($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>