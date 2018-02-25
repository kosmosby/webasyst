<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:09:49
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/users/Users.html" */ ?>
<?php /*%%SmartyHeaderCode:10905259255a8be5ddb2d2c6-87334492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5a45d91816ef669f1ac570891ac0b8807d1886' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/users/Users.html',
      1 => 1495462413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10905259255a8be5ddb2d2c6-87334492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'sort' => 0,
    '_sort_list' => 0,
    '_id' => 0,
    '_name' => 0,
    'contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8be5ddc7b4e5_52954443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8be5ddc7b4e5_52954443')) {function content_5a8be5ddc7b4e5_52954443($_smarty_tpl) {?><div class="t-users-page" id="t-users-page"><header class="t-content-header"><div class="t-layout"><div class="t-column left"><h1>Все пользователи</h1></div><div class="t-column right"><ul class="menu-h dropdown right"><?php $_smarty_tpl->tpl_vars['_sort_list'] = new Smarty_variable(array('last_seen'=>'Последний визит','name'=>'Имя','signed_up'=>'Зарегистрирован'), null, 0);?><li><span style="margin: 0 4px 0 0;">Сортировка:</span><a class="t-selected-item inline-link" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?sort=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display: inline-block;"><b><i><?php if (isset($_smarty_tpl->tpl_vars['_sort_list']->value[$_smarty_tpl->tpl_vars['sort']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_sort_list']->value[$_smarty_tpl->tpl_vars['sort']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&mdash;<?php }?></i></b>&nbsp;<i class="icon10 darr"></i></a><ul class="menu-v with-icons"><?php  $_smarty_tpl->tpl_vars['_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_sort_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_name']->key => $_smarty_tpl->tpl_vars['_name']->value){
$_smarty_tpl->tpl_vars['_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_name']->key;
?><li class="t-menu-item <?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['_id']->value){?>selected<?php }?>"><a href="<?php echo teamHelper::getUrl('sort',$_smarty_tpl->tpl_vars['_id']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul></li></ul></div></div></header><div class="t-content-body"><?php if (!empty($_smarty_tpl->tpl_vars['contacts']->value)){?><?php echo $_smarty_tpl->getSubTemplate ("./Users.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('contacts'=>$_smarty_tpl->tpl_vars['contacts']->value), 0);?>
<?php }else{ ?><p class="t-description">Нет пользователей.</p><?php }?></div><script>( function($) {$.team.setTitle("Пользователи");$.team.sidebar.updateCount("<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
", <?php echo count($_smarty_tpl->tpl_vars['contacts']->value);?>
);})(jQuery);</script></div>
<?php }} ?>