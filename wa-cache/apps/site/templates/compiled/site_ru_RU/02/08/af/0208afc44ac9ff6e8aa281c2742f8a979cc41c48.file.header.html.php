<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:06:03
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/header.html" */ ?>
<?php /*%%SmartyHeaderCode:7864299245a7ea7ebcf54c3-31935287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0208afc44ac9ff6e8aa281c2742f8a979cc41c48' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/header.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7864299245a7ea7ebcf54c3-31935287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'pages' => 0,
    'p' => 0,
    'selected_node' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7ebda31a8_64037168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7ebda31a8_64037168')) {function content_5a7ea7ebda31a8_64037168($_smarty_tpl) {?><!-- Site app page list -->
<?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>

<?php if (count($_smarty_tpl->tpl_vars['pages']->value)){?>
    <ul class="pages">
    
        
        <?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable(null, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if (strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['p']->value['url'])&&strlen($_smarty_tpl->tpl_vars['p']->value['url'])>=strlen($_smarty_tpl->tpl_vars['selected_node']->value['url'])){?><?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value, null, 0);?><?php }?>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['selected_node']->value){?><?php $_smarty_tpl->createLocalArrayVariable('selected_node', null, 0);
$_smarty_tpl->tpl_vars['selected_node']->value['id'] = null;?><?php }?>
        
        
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['p']->value['url']!=$_smarty_tpl->tpl_vars['wa_url']->value){?> 
                <li<?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['selected_node']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
            <?php }?>
        <?php } ?>
        
    </ul>
<?php }?><?php }} ?>