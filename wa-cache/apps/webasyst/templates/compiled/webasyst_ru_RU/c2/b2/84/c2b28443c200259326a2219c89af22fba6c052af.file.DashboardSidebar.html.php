<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:05:52
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-system/webasyst/templates/actions/dashboard/DashboardSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:2297504925a7ea7e004ec70-92947669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b28443c200259326a2219c89af22fba6c052af' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-system/webasyst/templates/actions/dashboard/DashboardSidebar.html',
      1 => 1452519811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2297504925a7ea7e004ec70-92947669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'widgets' => 0,
    'app_id' => 0,
    'apps' => 0,
    'app_widgets' => 0,
    'widget' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7e01c5540_31532872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7e01c5540_31532872')) {function content_5a7ea7e01c5540_31532872($_smarty_tpl) {?><header class="widgets-list-header-wrapper"><h4 class="widgets-list-header">Перетащите виджеты на вашу панель управления и расположите их так, как вам удобно. Расположение виджетов у каждого пользователя Webasyst индивидуально.<?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('installer','backend')){?> <a href="./installer/#/widgets/">Добавить виджеты</a><?php }?></h4><div class="cl"></div></header><section class="d-widgets-list-block"><?php  $_smarty_tpl->tpl_vars['app_widgets'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app_widgets']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app_widgets']->key => $_smarty_tpl->tpl_vars['app_widgets']->value){
$_smarty_tpl->tpl_vars['app_widgets']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app_widgets']->key;
?><div class="list-group-wrapper <?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
-list-group"><?php if ($_smarty_tpl->tpl_vars['app_id']->value!='webasyst'){?><header class="group-header-wrapper"><h5 class="group-header heading"><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['app_id']->value]['name'];?>
</h5></header><?php }else{ ?><header class="group-header-wrapper is-hidden"><h5 class="group-header heading">Добавить виджеты</h5></header><?php }?><div class="list-wrapper"><?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?><div class="widget-item-wrapper"id="list-widget-<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget'];?>
"data-app_id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['app_id'];?>
"data-size="<?php echo $_smarty_tpl->tpl_vars['widget']->value['size'];?>
"data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget'];?>
"><div class="image-wrapper"><div class="image-block" draggable="true" title="Щелкните по виджету или перетащите его на панель управления"><?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['img'])){?><img class="image-item" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['widget']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
"><?php }?></div></div><div class="text-block"><?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
</div></div><?php } ?></div></div><?php } ?></section><?php }} ?>