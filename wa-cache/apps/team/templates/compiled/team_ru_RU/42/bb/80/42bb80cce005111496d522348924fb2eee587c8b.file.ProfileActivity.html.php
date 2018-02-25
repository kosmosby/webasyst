<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:39
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/profile/ProfileActivity.html" */ ?>
<?php /*%%SmartyHeaderCode:20776087555a7ff98f6d23f8-76075243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42bb80cce005111496d522348924fb2eee587c8b' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/profile/ProfileActivity.html',
      1 => 1479737102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20776087555a7ff98f6d23f8-76075243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'activity' => 0,
    '_timestamp' => 0,
    '_activity_item' => 0,
    'time' => 0,
    '_last_datetime' => 0,
    '_period' => 0,
    'current_month_index' => 0,
    'before_month_index' => 0,
    'months' => 0,
    'count' => 0,
    '_max_id' => 0,
    'wa_app_url' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff98f942275_78646613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff98f942275_78646613')) {function content_5a7ff98f942275_78646613($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_timestamp'] = new Smarty_variable(waRequest::request("timestamp"), null, 0);?><?php $_smarty_tpl->tpl_vars['months'] = new Smarty_variable(waDateTime::getMonthNames(), null, 0);?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/team.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"><section class="t-activity-wrapper" id="t-activity-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['activity']->value)){?><?php $_smarty_tpl->tpl_vars['_period'] = new Smarty_variable(60*60*24*30, null, 0);?><?php $_smarty_tpl->tpl_vars['_last_datetime'] = new Smarty_variable(time(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_timestamp']->value)){?><?php $_smarty_tpl->tpl_vars['_last_datetime'] = new Smarty_variable($_smarty_tpl->tpl_vars['_timestamp']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_max_id'] = new Smarty_variable(null, null, 0);?><ul class="t-activity-list"><?php  $_smarty_tpl->tpl_vars['_activity_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_activity_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_activity_item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_activity_item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_activity_item']->key => $_smarty_tpl->tpl_vars['_activity_item']->value){
$_smarty_tpl->tpl_vars['_activity_item']->_loop = true;
 $_smarty_tpl->tpl_vars['_activity_item']->iteration++;
 $_smarty_tpl->tpl_vars['_activity_item']->last = $_smarty_tpl->tpl_vars['_activity_item']->iteration === $_smarty_tpl->tpl_vars['_activity_item']->total;
?><?php if ($_smarty_tpl->tpl_vars['_activity_item']->last){?><?php $_smarty_tpl->tpl_vars['_max_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_activity_item']->value['id'], null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable(strtotime($_smarty_tpl->tpl_vars['_activity_item']->value['datetime']), null, 0);?><?php $_smarty_tpl->tpl_vars['current_month_index'] = new Smarty_variable(date('n',$_smarty_tpl->tpl_vars['time']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['before_month_index'] = new Smarty_variable(date('n',$_smarty_tpl->tpl_vars['_last_datetime']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_long_pause'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_last_datetime']->value-$_smarty_tpl->tpl_vars['time']->value>$_smarty_tpl->tpl_vars['_period']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_last_datetime'] = new Smarty_variable($_smarty_tpl->tpl_vars['time']->value, null, 0);?><?php if ($_smarty_tpl->tpl_vars['current_month_index']->value!=$_smarty_tpl->tpl_vars['before_month_index']->value){?><li class="t-month-wrapper"><h5 class="heading"><?php echo $_smarty_tpl->tpl_vars['months']->value[date('n',$_smarty_tpl->tpl_vars['time']->value)];?>
 <?php echo date('Y',$_smarty_tpl->tpl_vars['time']->value);?>
</h5></li><?php }?><li class="t-activity-item <?php if (!empty($_smarty_tpl->tpl_vars['_activity_item']->value['is_empty'])){?>is-empty<?php }?> <?php if ($_smarty_tpl->tpl_vars['current_month_index']->value!=$_smarty_tpl->tpl_vars['before_month_index']->value){?>is-first<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['_activity_item']->value['id'];?>
" data-timestamp="<?php echo $_smarty_tpl->tpl_vars['_last_datetime']->value;?>
"><span class="t-activity-point" style="background: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['_activity_item']->value['app']['sash_color'])===null||$tmp==='' ? "#aaa" : $tmp);?>
;"></span><div class="t-activity-block"><div class="inline-content"><?php if (!(empty($_smarty_tpl->tpl_vars['_activity_item']->value['app'])||empty($_smarty_tpl->tpl_vars['_activity_item']->value['app']['name']))){?><span class="t-app" style="background: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['_activity_item']->value['app']['sash_color'])===null||$tmp==='' ? "#aaa" : $tmp);?>
;"><?php echo $_smarty_tpl->tpl_vars['_activity_item']->value['app']['name'];?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_activity_item']->value['action_name'])){?><span class="t-action gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_activity_item']->value['action_name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_activity_item']->value['params_html'])){?><?php echo $_smarty_tpl->tpl_vars['_activity_item']->value['params_html'];?>
<?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['_activity_item']->value['datetime'])){?><div class="t-datetime hint"><?php echo waDateTime::format('humandatetime',$_smarty_tpl->tpl_vars['_activity_item']->value['datetime']);?>
</div><?php }?></div></li><?php } ?></ul><?php if (($_smarty_tpl->tpl_vars['count']->value==50)){?><div class="t-paging-wrapper" data-max-id="<?php echo $_smarty_tpl->tpl_vars['_max_id']->value;?>
"><i class="icon16 loading"></i>Загрузка...</div><?php }?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/team.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/profile.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script>( function($) {$.team.app_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
;var $wrapper = $("#t-activity-wrapper");setLast();new ActivityLazyLoading({$wrapper: $wrapper,names: {list: ".t-activity-list",items: " > li",paging: ".t-paging-wrapper"},user_id: <?php if (!empty($_smarty_tpl->tpl_vars['user_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
<?php }else{ ?>false<?php }?>,onLoad: setLast});function setLast() {var first_class = "is-first",last_class = "is-last";var $items = $wrapper.find(".t-activity-item." + first_class);$items.each( function() {var $prev = $(this).prev().prev();if (!$prev.hasClass(last_class)) {$prev.addClass(last_class);}});}})(jQuery);</script><?php }else{ ?><div class="t-no-activity">Для этого пользователя ещё нет событий.</div><?php }?></section>
<?php }} ?>