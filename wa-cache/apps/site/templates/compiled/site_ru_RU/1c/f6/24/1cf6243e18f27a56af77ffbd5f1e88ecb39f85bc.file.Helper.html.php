<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:49:08
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/helper/Helper.html" */ ?>
<?php /*%%SmartyHeaderCode:11339808275a7f4cb4675ef7-74996224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf6243e18f27a56af77ffbd5f1e88ecb39f85bc' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/helper/Helper.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11339808275a7f4cb4675ef7-74996224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'wa_url' => 0,
    'file' => 0,
    'vars' => 0,
    'v' => 0,
    'desc' => 0,
    'sub_v' => 0,
    'sub_desc' => 0,
    'wa_vars' => 0,
    'smarty_vars' => 0,
    'blocks' => 0,
    'block_id' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4cb4791274_68875270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4cb4791274_68875270')) {function content_5a7f4cb4791274_68875270($_smarty_tpl) {?><ul class="tabs">
	<?php if ($_smarty_tpl->tpl_vars['app']->value){?><li class="no-tab"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][24];?>
" alt=""><p class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true);?>
</p><p><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></p></li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['vars']->value){?><li id="s-helper-vars" class="selected"><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php }?>
	<li id="s-helper-wa"<?php if (!$_smarty_tpl->tpl_vars['vars']->value){?> class="selected"<?php }?>><a href="#">$wa</a></li>
	<li id="s-helper-smarty"><a href="#">Smarty</a></li>
    <li id="s-helper-blocks"><a href="#">Блоки</a></li>
</ul>
<?php if ($_smarty_tpl->tpl_vars['vars']->value){?>
<div id="s-helper-vars-content" class="tab-content s-dropdown-content">
	<div class="fields">
		<?php  $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desc']->_loop = false;
 $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desc']->key => $_smarty_tpl->tpl_vars['desc']->value){
$_smarty_tpl->tpl_vars['desc']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->value = $_smarty_tpl->tpl_vars['desc']->key;
?>
		<div class="field">
			<div class="name"><a href="#" class="inline-link"><b><i>&#123;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&#125;</i></b></a></div>
			<?php if (!is_array($_smarty_tpl->tpl_vars['desc']->value)){?><div class="value"><span class="hint"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</span></div><?php }?>
		</div>
		<?php if (is_array($_smarty_tpl->tpl_vars['desc']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['sub_desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_desc']->_loop = false;
 $_smarty_tpl->tpl_vars['sub_v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['desc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_desc']->key => $_smarty_tpl->tpl_vars['sub_desc']->value){
$_smarty_tpl->tpl_vars['sub_desc']->_loop = true;
 $_smarty_tpl->tpl_vars['sub_v']->value = $_smarty_tpl->tpl_vars['sub_desc']->key;
?>
			<div class="field subfield">
				<div class="name"><a href="#" class="inline-link"><b><i>&#123;<?php echo $_smarty_tpl->tpl_vars['sub_v']->value;?>
&#125;</i></b></a></div>
				<div class="value"><span class="hint"><?php echo $_smarty_tpl->tpl_vars['sub_desc']->value;?>
</span></div>
			</div>
			<?php } ?>
		<?php }?>
		<?php } ?>
	</div>
</div>
<?php }?>
<div id="s-helper-wa-content" class="tab-content s-dropdown-content" <?php if ($_smarty_tpl->tpl_vars['vars']->value){?>style="display:none"<?php }?>>
	<div class="fields">
		<?php  $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desc']->_loop = false;
 $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wa_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desc']->key => $_smarty_tpl->tpl_vars['desc']->value){
$_smarty_tpl->tpl_vars['desc']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->value = $_smarty_tpl->tpl_vars['desc']->key;
?>
		<div class="field">
			<div class="name"><a href="#" class="inline-link"><b><i>&#123;<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&#125;</i></b></a></div>
			<div class="value"><span class="hint"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</span></div>
		</div>
		<?php } ?>
	</div>
</div>
<div id="s-helper-smarty-content" class="tab-content s-dropdown-content" style="display:none">
    <div class="fields">
        <?php  $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desc']->_loop = false;
 $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['smarty_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desc']->key => $_smarty_tpl->tpl_vars['desc']->value){
$_smarty_tpl->tpl_vars['desc']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->value = $_smarty_tpl->tpl_vars['desc']->key;
?>
	   <div class="field">
            <div class="name"><a href="#" class="inline-link"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></div>
            <div class="value"><span class="hint"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</span></div>
	   </div>
	   <?php } ?>
	</div>
</div>

<div id="s-helper-blocks-content" class="tab-content s-dropdown-content" style="display:none">
    <div class="fields">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['block_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['block_id']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
        <div class="field">
            <div class="name"><a href="#" class="inline-link"><b><i>{$wa->block('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8', true);?>
')}</i></b></a></div>
            <div class="value"><span class="hint"><?php echo $_smarty_tpl->tpl_vars['b']->value['description'];?>
</span></div>
        </div>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">
	$("#s-save-panel ul.tabs li a").click(function () {
		$("#s-save-panel ul.tabs li.selected").removeClass('selected');
		var id = $(this).parent().addClass('selected').attr('id') + '-content';
		$("#s-save-panel div.tab-content").hide();
		$('#' + id).show();
		return false;
	});
</script><?php }} ?>