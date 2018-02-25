<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:20
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsInfoTabs.html" */ ?>
<?php /*%%SmartyHeaderCode:13537864655a7ff97ca16db0-66139641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f1efe67fb4328f4203e043bd62922cfa98d4e1' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsInfoTabs.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13537864655a7ff97ca16db0-66139641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'l' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff97caed1d5_42981808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff97caed1d5_42981808')) {function content_5a7ff97caed1d5_42981808($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['links']->value)){?>
	<ul id="c-info-additional-tabs" style="display:none">
		<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?>
			<li id="t-<?php if (!empty($_smarty_tpl->tpl_vars['l']->value['hash'])){?><?php echo $_smarty_tpl->tpl_vars['l']->value['hash'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"><a href="javascript:void(0)">
				<?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['l']->value['count']){?><span class="indicator red"><?php echo $_smarty_tpl->tpl_vars['l']->value['count'];?>
</span><?php }?>
			</a></li>
		<?php } ?>
	</ul>

	<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?>
		<div id="tc-<?php if (!empty($_smarty_tpl->tpl_vars['l']->value['hash'])){?><?php echo $_smarty_tpl->tpl_vars['l']->value['hash'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" class="tab-content hidden">
			<div class="block double-padded">
				<div class="tc">
					<?php if (!empty($_smarty_tpl->tpl_vars['l']->value['html'])){?>
						<?php echo $_smarty_tpl->tpl_vars['l']->value['html'];?>

					<?php }elseif(!empty($_smarty_tpl->tpl_vars['l']->value['url'])){?>

						
						<h2>Загрузка... <i class="icon16 loading" style="margin-left:16px"></i></h2>
						<script>
                                                                                $('#t-<?php if (!empty($_smarty_tpl->tpl_vars['l']->value['hash'])){?><?php echo $_smarty_tpl->tpl_vars['l']->value['hash'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>').one('click', function() {
                                                                                    $.wa.contactEditor.load($('#tc-<?php if (!empty($_smarty_tpl->tpl_vars['l']->value['hash'])){?><?php echo $_smarty_tpl->tpl_vars['l']->value['hash'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?> div.tc'), '<?php echo $_smarty_tpl->tpl_vars['l']->value['url'];?>
');
                                                                                });
						</script>
					<?php }?>
				</div>
				<div class="clear-left"></div>
			</div>
		</div>
	<?php } ?>

	<script>
                    $('#c-info-additional-tabs').children().appendTo('#c-info-tabs');
                    $('#c-info-additional-tabs').remove();
	</script>
<?php }?>

<?php }} ?>