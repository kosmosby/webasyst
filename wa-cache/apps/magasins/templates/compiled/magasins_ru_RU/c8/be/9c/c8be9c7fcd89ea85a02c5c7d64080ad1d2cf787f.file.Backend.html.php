<?php /* Smarty version Smarty-3.1.14, created on 2018-02-25 14:48:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/backend/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:15733402625a8c05093bee21-14539699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8be9c7fcd89ea85a02c5c7d64080ad1d2cf787f' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/backend/Backend.html',
      1 => 1519570118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15733402625a8c05093bee21-14539699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8c05093ce362_96112708',
  'variables' => 
  array (
    'records' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c05093ce362_96112708')) {function content_5a8c05093ce362_96112708($_smarty_tpl) {?><div class="b-stream">

    <div class="b-stream-title">

        <div class="float-right ie-menu-h-fix">
            <ul class="menu-h" id="blog-stream-primary-menu">

                <li class="b-search-form">
                    <input type="search" name="text" class="search" placeholder="Искать" value="">
                </li>

            </ul>

        </div>
        <h1>
            Все записи

        </h1>
  </div>

    <div class="block b-post b-number-of-posts pageless-wrapper">
        <div class="block">
            <ul class="zebra">
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <li>
                    <a class="count" href="?module=magasin&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
                    удалить</a>
                        <div><a href="?module=magasin&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
)</a></div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    </div>
</div><?php }} ?>