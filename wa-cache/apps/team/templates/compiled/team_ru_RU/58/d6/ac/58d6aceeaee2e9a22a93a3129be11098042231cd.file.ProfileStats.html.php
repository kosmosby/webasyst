<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:40
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/profile/ProfileStats.html" */ ?>
<?php /*%%SmartyHeaderCode:9409381605a7ff9908e2b78-01824077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d6aceeaee2e9a22a93a3129be11098042231cd' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/profile/ProfileStats.html',
      1 => 1485943162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9409381605a7ff9908e2b78-01824077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_periods' => 0,
    'timeframe' => 0,
    'group_by' => 0,
    '_period' => 0,
    '_is_period_set' => 0,
    '_apps' => 0,
    'apps' => 0,
    'selected_app_id' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    '_selected_app' => 0,
    '_app' => 0,
    '_selected_period' => 0,
    'start_date' => 0,
    'end_date' => 0,
    '_is_month' => 0,
    'container_id' => 0,
    'app' => 0,
    'status_stats' => 0,
    'stat' => 0,
    '_styles' => 0,
    'chart_data' => 0,
    'wa_app_url' => 0,
    'contact_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff990e106d4_92638318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff990e106d4_92638318')) {function content_5a7ff990e106d4_92638318($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_periods'] = new Smarty_variable(array(0=>array("id"=>0,"name"=>_w('Last %d day','Last %d days',30),"timeframe"=>30,"groupby"=>"days"),1=>array("id"=>1,"name"=>_w('Last %d day','Last %d days',90),"timeframe"=>90,"groupby"=>"days"),2=>array("id"=>2,"name"=>_w('Last %d day','Last %d days',365),"timeframe"=>365,"groupby"=>"months"),3=>array("id"=>3,"name"=>_w('All time'),"timeframe"=>"all","groupby"=>"months"),"custom"=>array("id"=>"custom","class"=>"js-show-period-form","name"=>_w('Select dates...'))), null, 0);?><?php $_smarty_tpl->tpl_vars['_selected_period'] = new Smarty_variable($_smarty_tpl->tpl_vars['_periods']->value[1], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['timeframe']->value)&&!empty($_smarty_tpl->tpl_vars['group_by']->value)){?><?php $_smarty_tpl->tpl_vars['_is_period_set'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['_period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_period']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_period']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_period']->key => $_smarty_tpl->tpl_vars['_period']->value){
$_smarty_tpl->tpl_vars['_period']->_loop = true;
 $_smarty_tpl->tpl_vars['_period']->iteration++;
 $_smarty_tpl->tpl_vars['_period']->last = $_smarty_tpl->tpl_vars['_period']->iteration === $_smarty_tpl->tpl_vars['_period']->total;
?><?php if (!empty($_smarty_tpl->tpl_vars['_period']->value['timeframe'])&&($_smarty_tpl->tpl_vars['_period']->value['timeframe']==$_smarty_tpl->tpl_vars['timeframe']->value)&&!empty($_smarty_tpl->tpl_vars['_period']->value['groupby'])&&($_smarty_tpl->tpl_vars['_period']->value['groupby']==$_smarty_tpl->tpl_vars['group_by']->value)){?><?php $_smarty_tpl->tpl_vars['_selected_period'] = new Smarty_variable($_smarty_tpl->tpl_vars['_period']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['_is_period_set'] = new Smarty_variable(true, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_period']->last&&!$_smarty_tpl->tpl_vars['_is_period_set']->value){?><?php $_smarty_tpl->tpl_vars['_selected_period'] = new Smarty_variable($_smarty_tpl->tpl_vars['_periods']->value["custom"], null, 0);?><?php }?><?php } ?><?php }?><?php $_smarty_tpl->tpl_vars['_apps'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('_apps', null, 0);
$_smarty_tpl->tpl_vars['_apps']->value["all"] = array("id"=>null,"name"=>_w('All apps'));?><?php $_smarty_tpl->tpl_vars['_apps'] = new Smarty_variable(array_merge($_smarty_tpl->tpl_vars['_apps']->value,$_smarty_tpl->tpl_vars['apps']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_selected_app'] = new Smarty_variable($_smarty_tpl->tpl_vars['_apps']->value["all"], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['selected_app_id']->value)){?><?php $_smarty_tpl->tpl_vars['_selected_app'] = new Smarty_variable($_smarty_tpl->tpl_vars['_apps']->value[$_smarty_tpl->tpl_vars['selected_app_id']->value], null, 0);?><?php }?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->request("is_update")){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/team.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.all.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet"><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js"></script><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='en_US'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script><?php }?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/d3/d3.min.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/profile.stats.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><?php }?><section class="t-stats-wrapper" id="t-stats-wrapper"><header class="t-header-wrapper"><ul class="t-filters"><li class="t-filter t-app-filter"><ul class="menu-h dropdown"><li><a class="t-selected-item inline-link" href="javascript:void(0);"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_selected_app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a><ul class="menu-v"><?php  $_smarty_tpl->tpl_vars['_app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_app']->key => $_smarty_tpl->tpl_vars['_app']->value){
$_smarty_tpl->tpl_vars['_app']->_loop = true;
?><li class="<?php if ($_smarty_tpl->tpl_vars['_app']->value['id']===$_smarty_tpl->tpl_vars['_selected_app']->value['id']){?>selected<?php }?>"><a href="javascript:void(0);" <?php if (!empty($_smarty_tpl->tpl_vars['_app']->value['id'])){?>data-app-id="<?php echo $_smarty_tpl->tpl_vars['_app']->value['id'];?>
"<?php }?>><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></li><?php } ?></ul></li></ul><input name="app_id" type="hidden" value=""></li><li class="t-filter t-period-filter"><ul class="menu-h dropdown"><li><a class="t-selected-item inline-link" href="javascript:void(0);"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_selected_period']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a><ul class="menu-v"><?php  $_smarty_tpl->tpl_vars['_period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_periods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_period']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_period']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_period']->key => $_smarty_tpl->tpl_vars['_period']->value){
$_smarty_tpl->tpl_vars['_period']->_loop = true;
 $_smarty_tpl->tpl_vars['_period']->iteration++;
 $_smarty_tpl->tpl_vars['_period']->last = $_smarty_tpl->tpl_vars['_period']->iteration === $_smarty_tpl->tpl_vars['_period']->total;
?><li class="<?php if ($_smarty_tpl->tpl_vars['_period']->value['id']===$_smarty_tpl->tpl_vars['_selected_period']->value['id']){?>selected<?php }?>"><a class="<?php if (!empty($_smarty_tpl->tpl_vars['_period']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['_period']->value['class'];?>
<?php }?>" href="javascript:void(0);" <?php if (!empty($_smarty_tpl->tpl_vars['_period']->value['timeframe'])){?>data-timeframe="<?php echo $_smarty_tpl->tpl_vars['_period']->value['timeframe'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['_period']->value['groupby'])){?>data-groupby="<?php echo $_smarty_tpl->tpl_vars['_period']->value['groupby'];?>
"<?php }?> ><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_period']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a></li><?php } ?></ul></li><li class="t-hidden-part <?php if ($_smarty_tpl->tpl_vars['_selected_period']->value['id']==="custom"){?>is-shown<?php }?>"><form action="/"><label>с</label><span><input class="t-date js-datepicker" type="text" placeholder="Начало" value="<?php echo teamHelper::date($_smarty_tpl->tpl_vars['start_date']->value);?>
"><input type="hidden" name="from" value="<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['start_date']->value));?>
"></span><label>по</label><span><input class="t-date js-datepicker" type="text" placeholder="Окончание" value="<?php echo teamHelper::date($_smarty_tpl->tpl_vars['end_date']->value);?>
"><input type="hidden" name="to" value="<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['end_date']->value));?>
"></span><select name="groupby"><?php $_smarty_tpl->tpl_vars['_is_month'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['_selected_period']->value['id']==="custom"&&!empty($_smarty_tpl->tpl_vars['group_by']->value)&&$_smarty_tpl->tpl_vars['group_by']->value=="months"){?><?php $_smarty_tpl->tpl_vars['_is_month'] = new Smarty_variable(true, null, 0);?><?php }?><option value="days">по дням</option><option value="months" <?php if ($_smarty_tpl->tpl_vars['_is_month']->value){?>selected<?php }?>>по месяцам</option></select><input class="js-set-custom-period" type="button" value="Применить"></form></li></ul></li></ul><div class="t-todo-rework" style="display: none;"><?php $_smarty_tpl->tpl_vars['container_id'] = new Smarty_variable(uniqid('t-profile-stats-'), null, 0);?><div class="block" id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
"><div class="block"><span>Date filter:</span><div class="t-right-column is-middle"><div class="t-menu-item"><ul class="menu-h dropdown t-logs-timeframe"><li class="hidden t-custom-timeframe" style="display: none">с<input type="text" name="from" data-datepicker="1">по<input type="text" name="to" data-datepicker="1"><select name="groupby"><option value="days">по дням</option><option value="months">по месяцам</option></select></li><li class="t-logs-timeframe-dropdown"><a href="javascript:void(0)" class="inline-link float-right"><b><i></i></b><i class="icon10 darr"></i></a><ul class="menu-v"><li data-timeframe="30" data-groupby="days"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',30);?>
</a></li><li data-timeframe="90" data-groupby="days" data-default-choice="1"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',90);?>
</a></li><li data-timeframe="365" data-groupby="months"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',365);?>
</a></li><li data-timeframe="all" data-groupby="months"><a href="javascript:void(0)" class="nowrap">Всё время</a></li><li data-timeframe="custom"><a href="javascript:void(0)" class="nowrap">Выбрать даты...</a></li></ul></li></ul></div></div></div><div class="block"><span>App ID:</span><select name="app_id"><?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select></div><div class="block"><input type="button" value="Apply" class="t-filter-apply"></div></div><script>$(function () {var container = $('#<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
');(function (timeframe, groupby) {var $dropdown = $('.t-logs-timeframe-dropdown', container);var $groupby = $('select[name=groupby]');var onSelectItem = function ($currenct_item, calc_width) {$dropdown.find('>a i').text($currenct_item.text());if (calc_width) {$dropdown.find('ul').width(2 * $dropdown.find('>a').width());}timeframe = $currenct_item.data('timeframe');if (timeframe === 'custom') {groupby = $groupby.val();$('.t-custom-timeframe', container).show().find('[name=groupby]').val(groupby);} else {groupby = $currenct_item.data('groupby');}};var $currenct_item = $dropdown.find('li[data-timeframe="' + timeframe + '"]');if (!$currenct_item.length) {$currenct_item = $dropdown.find('li[data-default-choice=1]');}onSelectItem($currenct_item, true);$dropdown.find('li[data-timeframe] a').click(function () {var $this = $(this), $li = $this.closest('li');onSelectItem($li);});$groupby.change(function () {groupby = $(this).val();});$('.t-filter-apply', container).click(function () {var from = $('[name=from]', container).val();var to = $('[name=to]', container).val();var params = [];if (from) {params.push('from=' + from);}if (to) {params.push('to=' + to);}if (timeframe) {params.push('timeframe=' + timeframe);}if (groupby) {params.push('groupby=' + groupby);}var app_id = $("[name=app_id]", container).val();if (app_id) {params.push('app_id=' + app_id);}params = params.join('&');console.log('-- Send params to server: ' + params + ' --');});})('<?php echo $_smarty_tpl->tpl_vars['timeframe']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['group_by']->value;?>
');});</script></div></header><div class="t-stats-body"><div class="t-graph-wrapper" id="t-graph-wrapper"><div class="t-graph"></div><div class="t-hint-wrapper"><div class="t-line"><span class="t-app"></span>: <span class="t-value"></span></div><div class="t-line"><span class="t-date"></span></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['status_stats']->value)){?><div class="t-status-wrapper"><ul class="t-status-list"><?php  $_smarty_tpl->tpl_vars['stat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status_stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stat']->key => $_smarty_tpl->tpl_vars['stat']->value){
$_smarty_tpl->tpl_vars['stat']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_styles'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['stat']->value['bg_color'])){?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "background: ".((string)$_smarty_tpl->tpl_vars['stat']->value['bg_color']).";";?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['stat']->value['font_color'])){?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "color: ".((string)$_smarty_tpl->tpl_vars['stat']->value['font_color']).";";?><?php }?><li class="t-status-item"><span class="t-name" style="<?php echo join($_smarty_tpl->tpl_vars['_styles']->value,'');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><span class="t-divider">&mdash;</span><span class="t-count"><?php if ($_smarty_tpl->tpl_vars['stat']->value['duration']['days']>0){?><?php echo sprintf(_w("%d day","%d days",$_smarty_tpl->tpl_vars['stat']->value['duration']['days']),$_smarty_tpl->tpl_vars['stat']->value['duration']['days']);?>
&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['stat']->value['duration']['hours']>0){?><?php echo sprintf(_w("%d hour","%d hours",$_smarty_tpl->tpl_vars['stat']->value['duration']['hours']),$_smarty_tpl->tpl_vars['stat']->value['duration']['hours']);?>
<?php }?></span></li><?php } ?></ul></div><?php }?></div><script>(function($) {var $wrapper = $("#t-stats-wrapper").removeAttr("id");new ProfileStatistic({$wrapper: $wrapper,graphData: <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
,app_url: "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
",app_id: <?php if (!empty($_smarty_tpl->tpl_vars['_selected_app']->value['id'])&&$_smarty_tpl->tpl_vars['_selected_app']->value['id']!="all"){?><?php echo json_encode($_smarty_tpl->tpl_vars['_selected_app']->value['id']);?>
<?php }else{ ?>false<?php }?>,group_by: <?php if (!empty($_smarty_tpl->tpl_vars['group_by']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['group_by']->value);?>
<?php }else{ ?>false<?php }?>,timeframe: <?php if (!empty($_smarty_tpl->tpl_vars['timeframe']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['timeframe']->value);?>
<?php }else{ ?>false<?php }?>,start_date: <?php if (!empty($_smarty_tpl->tpl_vars['start_date']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['start_date']->value);?>
<?php }else{ ?>false<?php }?>,end_date: <?php if (!empty($_smarty_tpl->tpl_vars['end_date']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['end_date']->value);?>
<?php }else{ ?>false<?php }?>,contact_id: <?php echo json_encode($_smarty_tpl->tpl_vars['contact_id']->value);?>
,locales: {months: ["<?php echo _ws('January','January');?>
","<?php echo _ws('February','February',1);?>
","<?php echo _ws('March','March');?>
","<?php echo _ws('April','April');?>
","<?php echo _ws('May','May');?>
","<?php echo _ws('June','June');?>
","<?php echo _ws('July','July');?>
","<?php echo _ws('August','August');?>
","<?php echo _ws('September','September');?>
","<?php echo _ws('October','October');?>
","<?php echo _ws('November','November');?>
","<?php echo _ws('December','December');?>
"]}});})(jQuery);</script></section><?php }} ?>