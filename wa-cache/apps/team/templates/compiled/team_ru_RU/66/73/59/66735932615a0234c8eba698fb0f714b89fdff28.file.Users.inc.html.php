<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:09:49
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/users/Users.inc.html" */ ?>
<?php /*%%SmartyHeaderCode:14676385445a8be5ddc87093-91584444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66735932615a0234c8eba698fb0f714b89fdff28' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/users/Users.inc.html',
      1 => 1487680336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14676385445a8be5ddc87093-91584444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    '_is_admin' => 0,
    '_has_rights' => 0,
    'contacts' => 0,
    'user' => 0,
    'wa_app_url' => 0,
    '_title' => 0,
    '_l' => 0,
    '_user_uri' => 0,
    '_can_drag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8be5dde82fd4_51596015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8be5dde82fd4_51596015')) {function content_5a8be5dde82fd4_51596015($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_admin'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin($_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?><?php $_smarty_tpl->tpl_vars['_has_rights'] = new Smarty_variable(teamHelper::hasRights(), null, 0);?><?php $_smarty_tpl->tpl_vars['_can_drag'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_is_admin']->value||$_smarty_tpl->tpl_vars['_has_rights']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['contacts']->value)){?><ul class="thumbs li150px t-users-list" id="t-users-list"><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(waUser::getNameAndStatus($_smarty_tpl->tpl_vars['user']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_user_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."id/".((string)$_smarty_tpl->tpl_vars['user']->value['id'])."/", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['login'])&&$_smarty_tpl->tpl_vars['user']->value['login']!=$_smarty_tpl->tpl_vars['_title']->value){?><?php $_smarty_tpl->tpl_vars['_l'] = new Smarty_variable(htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['user']->value['login']), ENT_QUOTES, 'UTF-8', true), null, 0);?><?php $_smarty_tpl->tpl_vars['_user_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."u/".((string)$_smarty_tpl->tpl_vars['_l']->value)."/", null, 0);?><?php }?><li class="t-user-wrapper <?php if ($_smarty_tpl->tpl_vars['user']->value['is_user']>=1){?>js-move-user<?php }?>" data-user-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-update-datetime="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['update_datetime'])===null||$tmp==='' ? '' : $tmp);?>
"><div class="t-user-block"><div class="t-userpic-wrapper"><a href="<?php echo $_smarty_tpl->tpl_vars['_user_uri']->value;?>
"><img class="t-userpic" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url_144'];?>
"></a></div><h5 class="t-name"><a href="<?php echo $_smarty_tpl->tpl_vars['_user_uri']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</a></h5><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['jobtitle'])){?><div class="t-job"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['jobtitle'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?><div class="t-login"><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['login'])&&$_smarty_tpl->tpl_vars['user']->value['login']!=waUser::formatName($_smarty_tpl->tpl_vars['user']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['user']->value['name'])&&$_smarty_tpl->tpl_vars['user']->value['name']!=waUser::formatName($_smarty_tpl->tpl_vars['user']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div></div></li><?php } ?></ul><?php if ($_smarty_tpl->tpl_vars['_can_drag']->value){?><script>( function($) {var $list = $("#t-users-list").removeAttr("id");new UserList({$wrapper: $list});})(jQuery);</script><?php }?><?php }?>
<?php }} ?>