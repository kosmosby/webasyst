<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:09:49
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-system/user/templates/NameAndStatus.html" */ ?>
<?php /*%%SmartyHeaderCode:12935109055a8be5dde8d423-95399947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58442a59c73674c553d0ecaa687b5633012cf813' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-system/user/templates/NameAndStatus.html',
      1 => 1490191370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12935109055a8be5dde8d423-95399947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    '_event' => 0,
    'formatted_user_name' => 0,
    '_user_name' => 0,
    'title' => 0,
    '_is_user' => 0,
    'user_birthday_str' => 0,
    '_timezone' => 0,
    '_start_date' => 0,
    '_end_date' => 0,
    '_styles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8be5de2c6b30_57134327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8be5de2c6b30_57134327')) {function content_5a8be5de2c6b30_57134327($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_styles'] = new Smarty_variable(array(), null, 0);?><?php if (is_array($_smarty_tpl->tpl_vars['user']->value)){?><?php $_smarty_tpl->tpl_vars['_event'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value['_event'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_event'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getEvent(), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['bg_color'])){?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "background: ".((string)$_smarty_tpl->tpl_vars['_event']->value['bg_color']).";";?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['font_color'])){?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "color: `_event.font_color`;";?><?php }?><?php $_smarty_tpl->tpl_vars['_user_name'] = new Smarty_variable(htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['formatted_user_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['name'] : $tmp))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true), null, 0);?><span class="wa-user-info"><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['_online_status'])&&$_smarty_tpl->tpl_vars['user']->value['_online_status']=='online'){?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(sprintf(_ws('%s is now online'),$_smarty_tpl->tpl_vars['_user_name']->value), null, 0);?><i class="icon16 status-green-tiny" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></i><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_user_name']->value)){?><?php $_smarty_tpl->tpl_vars['_is_user'] = new Smarty_variable(null, null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['user']->value['is_user'])){?><?php $_smarty_tpl->tpl_vars['_is_user'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value['is_user'], null, 0);?><?php }?><span class="user-name <?php if ($_smarty_tpl->tpl_vars['_is_user']->value==0){?>italic<?php }?> <?php if ($_smarty_tpl->tpl_vars['_is_user']->value<=0){?>gray<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_user_name']->value;?>
</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['birth_day'])&&$_smarty_tpl->tpl_vars['user']->value['birth_day']==waDateTime::format('j')&&$_smarty_tpl->tpl_vars['user']->value['birth_month']==waDateTime::format('n')){?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(sprintf(_ws('%s\'s birthday — %s'),$_smarty_tpl->tpl_vars['_user_name']->value,$_smarty_tpl->tpl_vars['user_birthday_str']->value), null, 0);?><i class="icon16 cake" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></i><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value)){?><?php if ($_smarty_tpl->tpl_vars['_event']->value['is_allday']){?><?php $_smarty_tpl->tpl_vars['_timezone'] = new Smarty_variable(waDateTime::getDefaultTimeZone(), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_timezone'] = new Smarty_variable(null, null, 0);?><?php }?><?php if ((waDateTime::format('Y',$_smarty_tpl->tpl_vars['_event']->value['start'])==waDateTime::format('Y'))){?><?php $_smarty_tpl->tpl_vars['_start_date'] = new Smarty_variable(waDateTime::format('shortdate',$_smarty_tpl->tpl_vars['_event']->value['start'],$_smarty_tpl->tpl_vars['_timezone']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_start_date'] = new Smarty_variable(waDateTime::format('humandate',$_smarty_tpl->tpl_vars['_event']->value['start'],$_smarty_tpl->tpl_vars['_timezone']->value), null, 0);?><?php }?><?php if ((waDateTime::format('Y',$_smarty_tpl->tpl_vars['_event']->value['end'])==waDateTime::format('Y'))){?><?php $_smarty_tpl->tpl_vars['_end_date'] = new Smarty_variable(waDateTime::format('shortdate',$_smarty_tpl->tpl_vars['_event']->value['end'],$_smarty_tpl->tpl_vars['_timezone']->value), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_end_date'] = new Smarty_variable(waDateTime::format('humandate',$_smarty_tpl->tpl_vars['_event']->value['end'],$_smarty_tpl->tpl_vars['_timezone']->value), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_start_date']->value==$_smarty_tpl->tpl_vars['_end_date']->value){?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_event']->value['summary'])." (".((string)$_smarty_tpl->tpl_vars['_start_date']->value).")", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_event']->value['summary'])." (".((string)$_smarty_tpl->tpl_vars['_start_date']->value)." — ".((string)$_smarty_tpl->tpl_vars['_end_date']->value).")", null, 0);?><?php }?><span class="user-badge" <?php if (!empty($_smarty_tpl->tpl_vars['_styles']->value)){?>style="<?php echo join($_smarty_tpl->tpl_vars['_styles']->value,'');?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_event']->value['summary'];?>
</span><?php }?></span>
<?php }} ?>