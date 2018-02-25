<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:09:50
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:19704933195a8be5de304c18-47194153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597aafa0aac977b055afcc5485132815b27f6f95' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/Sidebar.html',
      1 => 1480589033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19704933195a8be5de304c18-47194153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    '_is_admin' => 0,
    '_has_rights' => 0,
    'module' => 0,
    'action' => 0,
    'all_count' => 0,
    'wa_app_url' => 0,
    'online_count' => 0,
    'backend_sidebar' => 0,
    '_' => 0,
    'groups' => 0,
    '_g' => 0,
    '_can_add' => 0,
    'locations' => 0,
    '_l' => 0,
    'invited_count' => 0,
    'inactive_count' => 0,
    '_can_sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8be5de666ee3_78870273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8be5de666ee3_78870273')) {function content_5a8be5de666ee3_78870273($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['module'] = new Smarty_variable(waRequest::param('module'), null, 0);?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(waRequest::param('action'), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_admin'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin($_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?><?php $_smarty_tpl->tpl_vars['_has_rights'] = new Smarty_variable(teamHelper::hasRights(), null, 0);?><?php $_smarty_tpl->tpl_vars['_can_sort'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_is_admin']->value||$_smarty_tpl->tpl_vars['_has_rights']->value), null, 0);?><div class="t-sidebar-block" id="t-sidebar"><div class="block"><ul class="menu-v with-icons"><?php if (teamHelper::hasRights('add_users')){?><li class="bottom-padded top-padded"><a class="bold js-no-highlight" href="javascript:void(0)" id="t-new-user-link"><i class="icon16 add"></i>Новый пользователь</a></li><?php }?><li class="<?php if ($_smarty_tpl->tpl_vars['module']->value=='users'&&!$_smarty_tpl->tpl_vars['action']->value){?>selected<?php }?>" id="all-users-sidebar-link"><span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['all_count']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><i class="icon16 contact"></i>Все пользователи</a></li><li class="<?php if ($_smarty_tpl->tpl_vars['module']->value=='users'&&$_smarty_tpl->tpl_vars['action']->value=='online'){?>selected<?php }?>"><span class="count"><?php echo $_smarty_tpl->tpl_vars['online_count']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
online/"><i class="icon16 status-green"></i>Онлайн</a></li><li class="<?php if ($_smarty_tpl->tpl_vars['module']->value=="calendar"){?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
calendar/"><i class="icon16 calendar"></i>Календарь</a></li><!-- plugin hook: 'backend_sidebar.top_li' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['top_li']);?>
<?php } ?></ul></div><div class="block"><form class="t-search-form"><input class="t-search-field" type="text" placeholder="Найти пользователей"><input class="t-search-submit" type="submit" value=""></form></div><!-- plugin hook: 'backend_sidebar.section' --><?php if (!empty($_smarty_tpl->tpl_vars['backend_sidebar']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['section']);?>
<?php } ?><?php }?><div class="block js-drop-block"><?php if (teamHelper::hasRights('add_groups')){?><a href="javascript:void(0);" class="count js-add-user-group"><i class="icon16 add"></i></a><?php }?><h5 class="heading top-padded"><b>Группы</b></h5><?php if ($_smarty_tpl->tpl_vars['groups']->value){?><ul class="menu-v with-icons collapsible t-groups-list"><?php  $_smarty_tpl->tpl_vars['_g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_g']->key => $_smarty_tpl->tpl_vars['_g']->value){
$_smarty_tpl->tpl_vars['_g']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_can_add'] = new Smarty_variable(teamHelper::hasRights("edit_users_in_group.".((string)$_smarty_tpl->tpl_vars['_g']->value['id'])), null, 0);?><li class="<?php if ($_smarty_tpl->tpl_vars['_can_add']->value){?>js-drop-place<?php }?>" data-group-id="<?php echo $_smarty_tpl->tpl_vars['_g']->value['id'];?>
"><span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['_g']->value['cnt'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
group/<?php echo $_smarty_tpl->tpl_vars['_g']->value['id'];?>
/"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['_g']->value['icon']){?><?php echo $_smarty_tpl->tpl_vars['_g']->value['icon'];?>
<?php }else{ ?>user<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_g']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul><?php }else{ ?><p class="hint align-center" style="margin: .5em 0 0;">Нет групп</p><?php }?></div><div class="block js-drop-block"><?php if (teamHelper::hasRights('add_groups')){?><a href="javascript:void(0);" class="count js-add-user-location"><i class="icon16 add"></i></a><?php }?><h5 class="heading top-padded"><b>Офисы</b></h5><?php if ($_smarty_tpl->tpl_vars['locations']->value){?><ul class="menu-v collapsible t-locations-list"><?php  $_smarty_tpl->tpl_vars['_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_l']->key => $_smarty_tpl->tpl_vars['_l']->value){
$_smarty_tpl->tpl_vars['_l']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_can_add'] = new Smarty_variable(teamHelper::hasRights("edit_users_in_group.".((string)$_smarty_tpl->tpl_vars['_l']->value['id'])), null, 0);?><li class="<?php if ($_smarty_tpl->tpl_vars['_can_add']->value){?>js-drop-place<?php }?>" data-group-id="<?php echo $_smarty_tpl->tpl_vars['_l']->value['id'];?>
"><span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['_l']->value['cnt'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
group/<?php echo $_smarty_tpl->tpl_vars['_l']->value['id'];?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_l']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul><?php }else{ ?><p class="hint align-center" style="margin: .5em 0 0;">Нет офисов</p><?php }?></div><div class="block"><ul class="menu-v with-icons"><?php if ($_smarty_tpl->tpl_vars['invited_count']->value){?><li><span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['invited_count']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
invited/"><i class="icon16 status-yellow-tiny"></i>Приглашения</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['inactive_count']->value){?><li><span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['inactive_count']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
inactive/"><i class="icon16 status-gray-tiny"></i>Неактивные</a></li><?php }?><!-- plugin hook: 'backend_sidebar.bottom_li' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['bottom_li']);?>
<?php } ?></ul></div><?php if (teamHelper::hasRights()){?><div class="hr"></div><div class="block"><ul class="menu-v with-icons"><?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin('webasyst')){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
access/"><i class="icon16 access"></i>Доступ</a></li><?php }?><li<?php if ($_smarty_tpl->tpl_vars['module']->value=='plugins'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
plugins/#/"><i class="icon16 plugins"></i>Плагины</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
settings/"><i class="icon16 settings"></i>Настройки</a></li></ul></div><?php }?><script>( function($) {$.team.sidebar = new Sidebar({$wrapper: $("#t-sidebar"),app_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
,can_sort: <?php if ($_smarty_tpl->tpl_vars['_can_sort']->value){?>true<?php }else{ ?>false<?php }?>});})(jQuery);</script></div>
<?php }} ?>