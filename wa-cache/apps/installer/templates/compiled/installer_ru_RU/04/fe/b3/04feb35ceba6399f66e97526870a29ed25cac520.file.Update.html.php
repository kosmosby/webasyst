<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:39
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/update/Update.html" */ ?>
<?php /*%%SmartyHeaderCode:15084998325a7f4f2bf27470-43140871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04feb35ceba6399f66e97526870a29ed25cac520' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/update/Update.html',
      1 => 1501509103,
      2 => 'file',
    ),
    'd4661a7498a59923ecd327e7981396f22e858494' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '769e10fa43b51bd256e4c01f2e502f409ec7e6a8' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/update/Update.row.html',
      1 => 1506611601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15084998325a7f4f2bf27470-43140871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'messages' => 0,
    'message' => 0,
    'items' => 0,
    'app' => 0,
    'wa' => 0,
    'update_counter_payware' => 0,
    'update_counter_applicable' => 0,
    'update_counter' => 0,
    'version' => 0,
    'app_id' => 0,
    'plugin' => 0,
    'item_id' => 0,
    'theme' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4f2c6252b2_83385991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4f2c6252b2_83385991')) {function content_5a7f4f2c6252b2_83385991($_smarty_tpl) {?><div class="shadowed">
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
        <div class="ui-error"><i class="icon16 error"></i><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
            <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?>
                    <i class="icon16 yes"></i>
                <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                    <i class="icon16 no"></i>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

            </div>
        <?php } ?>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['update_notice'])){?>
            <div class="i-upgrade-notice">
                <?php echo $_smarty_tpl->tpl_vars['app']->value['update_notice'];?>

            </div>
        <?php }?>
    <?php } ?>

    <form action="?module=update&amp;action=manager" method="post">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        <input type="hidden" name="additional_updates" value="<?php if ($_smarty_tpl->tpl_vars['update_counter_payware']->value||($_smarty_tpl->tpl_vars['update_counter_applicable']->value<$_smarty_tpl->tpl_vars['update_counter']->value)){?>1<?php }else{ ?>0<?php }?>">
        <table class="zebra i-updates">
            <thead>
            <?php if ($_smarty_tpl->tpl_vars['update_counter_applicable']->value){?>
                <tr class="i-top-extra-row">
                    <td colspan="3"></td>
                    <td class="i-update-button">
                        <input type="submit" value="Установить все обновления (<?php echo $_smarty_tpl->tpl_vars['update_counter_applicable']->value;?>
)"
                               id="update_all" class="bold large">
                    </td>
                </tr>
            <?php }?>

            <tr>
                <th class="min-width"></th>
                <th>Приложение</th>
                <th colspan="2" class="i-update-data">Версия</th>
            </tr>
            </thead>
            <tbody>

            <?php if (!$_smarty_tpl->tpl_vars['update_counter']->value){?>
                <tr>
                    <td colspan="4" class="align-center" style="background: #fff;">
                        <div class="block triple-padded">
                            Установлены последние версии всех приложений.
                            <br><br>
                            <?php echo sprintf("Версия Webasyst — <strong>%s</strong>",$_smarty_tpl->tpl_vars['version']->value);?>

                        </div>
                    </td>
                </tr>
            <?php }else{ ?>

                <!-- list of available updates -->
                <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>

                    <?php if (isset($_smarty_tpl->tpl_vars['app']->value['applicable'])||!empty($_smarty_tpl->tpl_vars['app']->value['plugins'])||!empty($_smarty_tpl->tpl_vars['app']->value['themes'])||!empty($_smarty_tpl->tpl_vars['app']->value['widgets'])){?>
                        <?php /*  Call merged included template "../update/Update.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../update/Update.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['app']->value,'item_id'=>$_smarty_tpl->tpl_vars['app_id']->value,'item_type'=>'app'), 0, '15084998325a7f4f2bf27470-43140871');
content_5a7f4f2c11edc6_15418762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../update/Update.row.html" */?>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['plugins'])){?>
                        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                            <?php /*  Call merged included template "../update/Update.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../update/Update.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['plugin']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'plugin'), 0, '15084998325a7f4f2bf27470-43140871');
content_5a7f4f2c11edc6_15418762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../update/Update.row.html" */?>
                        <?php } ?>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['themes'])){?>
                        <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
                            <?php /*  Call merged included template "../update/Update.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../update/Update.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['theme']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'theme'), 0, '15084998325a7f4f2bf27470-43140871');
content_5a7f4f2c11edc6_15418762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../update/Update.row.html" */?>
                        <?php } ?>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['widgets'])){?>
                        <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['widget']->key;
?>
                            <?php /*  Call merged included template "../update/Update.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../update/Update.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['widget']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'widget','app'=>$_smarty_tpl->tpl_vars['app']->value), 0, '15084998325a7f4f2bf27470-43140871');
content_5a7f4f2c11edc6_15418762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../update/Update.row.html" */?>
                        <?php } ?>
                    <?php }?>

                <?php } ?>

            <?php }?>
            </tbody>
        </table>
    </form>
</div>

<script type="text/javascript">
    
    $(document).ready(function () {
        $('input:hidden[name^=app_id]').each(function () {
            $(this).attr('disabled', true);
        });

        $(':submit[id^=update_]').click(function () {
            var item_id = $(this).attr('id').match(/^update_([\w_\-\/]+)$/);
            if (item_id && item_id[1]) {
                if (item_id[1] == 'all') {
                    $('input:hidden:disabled[name^=app_id]').removeAttr('disabled');
                    $('input:hidden[name="additional_updates"]').removeAttr('disabled');
                } else {
                    $('input:hidden[name^=app_id][data-app="' + item_id[1].replace(/(\/)/g, '\\/') + '"]').removeAttr('disabled');
                    $('#checkbox_' + item_id[1].replace(/(\/)/g, '\\/')).removeAttr('disabled');
                    $('input:hidden[name="additional_updates"]').attr('disabled', 'disabled');
                }
            }
        });

        
        //auto_submit:
        <?php if (!empty($_REQUEST['auto_submit'])){?>
        
        if ($(':submit[id^=update_]').length) {
            var $submit= $(':submit[id="update_all"]');
            $submit.after('<i class="icon16 loading"></i>');
            setTimeout(function () {
                $submit.click()
            }, 5000);
        }
        
        <?php }?>
        

        $('a.js-changelog-more').click(function () {
            $(this).parents('.js-changelog').find(':hidden').show();
            $(this).hide();
            return false;
        });
    });
    
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:40
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/update/Update.row.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4f2c11edc6_15418762')) {function content_5a7f4f2c11edc6_15418762($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><tr>

    <td class="i-update-icon">
    
        
        
        <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='app'&&!empty($_smarty_tpl->tpl_vars['item']->value['icons'][48])){?>

            <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['icons'][48])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['icons'][16] : $tmp);?>
" alt="">
        <?php }else{ ?>
            &nbsp;
        <?php }?>
    </td>

    <td class="i-update-name">
    
        
        
        <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'||$_smarty_tpl->tpl_vars['item_type']->value=='theme'||$_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>

            
            
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['icons'])&&false){?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['icons'][16];?>
" alt="">
            <?php }else{ ?>
                <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>plugins<?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>widgets<?php }else{ ?>design<?php }?>"></i>
            <?php }?>            
            
            <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>
                <?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('Плагин «<strong>%s</strong>»',$_tmp1);?>

            <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='theme'){?>
                <?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo sprintf('Тема дизайна «<strong>%s</strong>»',$_tmp2);?>

            <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>
                <?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php echo sprintf('Виджет «<strong>%s</strong>»',$_tmp3);?>

            <?php }else{ ?>
                <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
        <?php }else{ ?>

            
            
            <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='systemplugin'){?>
                <strong><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo sprintf('Плагин «<strong>%s</strong>»',$_tmp4);?>
</strong>
            <?php }else{ ?>
                <strong class="large"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong>
            <?php }?>

        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['vendor_name'])){?>
            <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vendor_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php }?>
    </td>

    <td class="i-update-data">
    
        

        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['version'])){?>
            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['version'];?>
</strong>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['installed']['version'])){?>
            <span class="hint"><?php echo sprintf('Установленная версия: %s',$_smarty_tpl->tpl_vars['item']->value['installed']['version']);?>
</span>
        <?php }?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['changelog'])){?>
            <div class="js-changelog">
                <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['changelog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['record']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['record']->iteration=0;
 $_smarty_tpl->tpl_vars['record']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
 $_smarty_tpl->tpl_vars['record']->iteration++;
 $_smarty_tpl->tpl_vars['record']->index++;
 $_smarty_tpl->tpl_vars['record']->first = $_smarty_tpl->tpl_vars['record']->index === 0;
 $_smarty_tpl->tpl_vars['record']->last = $_smarty_tpl->tpl_vars['record']->iteration === $_smarty_tpl->tpl_vars['record']->total;
?>
                    <h4 class="gray"<?php if ($_smarty_tpl->tpl_vars['record']->first){?> style="display:none;"<?php }?>><?php echo (($tmp = @$_smarty_tpl->tpl_vars['record']->value['version'])===null||$tmp==='' ? 'no-version' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['record']->value['datetime'])){?> <span class="hint"><?php echo htmlspecialchars(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['record']->value['datetime'],'humandate'), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></h4>
                    <?php echo nl2br($_smarty_tpl->tpl_vars['record']->value['content']);?>

                    <?php if (!$_smarty_tpl->tpl_vars['record']->last){?><br><br><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['record']->first&&!$_smarty_tpl->tpl_vars['record']->last){?>
                        <a class="inline-link js-changelog-more" href="#"><b><i>еще</i></b></a>
                        <span style="display: none;">
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['record']->first&&$_smarty_tpl->tpl_vars['record']->last){?>
                        </span>
                    <?php }?>
                <?php } ?>
            </div>
        <?php }?>

    </td>

    <td class="i-update-button">
    
        

        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['applicable'])&&in_array($_smarty_tpl->tpl_vars['item']->value['action'],array(waInstallerApps::ACTION_UPDATE,waInstallerApps::ACTION_CRITICAL_UPDATE,waInstallerApps::ACTION_INSTALL),true)){?>
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['commercial'])&&empty($_smarty_tpl->tpl_vars['item']->value['purchased'])){?>

            
                <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='app'){?>
                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("apps/".((string)$_smarty_tpl->tpl_vars['item']->value['id']), null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='theme'){?>
                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("themes/".((string)$_smarty_tpl->tpl_vars['item']->value['id']), null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>
                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("plugins/".((string)$_smarty_tpl->tpl_vars['item']->value['app'])."/".((string)$_smarty_tpl->tpl_vars['item']->value['id']), null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>
                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("widgets/".((string)$_smarty_tpl->tpl_vars['item']->value['app'])."/".((string)$_smarty_tpl->tpl_vars['item']->value['id']), null, 0);?>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['domains'])&&count($_smarty_tpl->tpl_vars['item']->value['domains'])>1){?>
                    <p class="small red bold"><?php echo sprintf('Для получения обновления необходимо иметь отдельную лицензию приложения «%s» для каждого домена, на котором это приложение используется: %s',$_smarty_tpl->tpl_vars['item']->value['name'],implode(', ',(array)$_smarty_tpl->tpl_vars['item']->value['domains']));?>
</p>
                <?php }else{ ?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['domains'])){?><?php $_smarty_tpl->tpl_vars['_domain'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['item']->value['domains']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_domain'] = new Smarty_variable($_smarty_tpl->tpl_vars['domain']->value, null, 0);?><?php }?>
                    <p class="small red"><?php echo sprintf('Лицензия для этого приложения либо истекла, либо недействительна для данного домена (%s)',$_smarty_tpl->tpl_vars['_domain']->value);?>
</p>
                <?php }?>
                <input type="button" onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/#/<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/';" value="Получить лицензию">
            <?php }elseif(!empty($_smarty_tpl->tpl_vars['item']->value['inbuilt'])){?>
                <p class="hint"><?php echo sprintf("Виджет будет обновлен автоматически при установке обновления приложения «%s».",htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['app']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['app'] : $tmp))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true));?>
</p>
                <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
]"
                       value="<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor'];?>
<?php if (isset($_smarty_tpl->tpl_vars['item']->value['edition'])&&$_smarty_tpl->tpl_vars['item']->value['edition']){?>:<?php echo $_smarty_tpl->tpl_vars['item']->value['edition'];?>
<?php }?>"
                       id="checkbox_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['slug'],'/','___');?>
" data-app="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['app'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }else{ ?>
                <!-- ok to update -->
                <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
]"
                       value="<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor'];?>
<?php if (isset($_smarty_tpl->tpl_vars['item']->value['edition'])&&$_smarty_tpl->tpl_vars['item']->value['edition']){?>:<?php echo $_smarty_tpl->tpl_vars['item']->value['edition'];?>
<?php }?>"
                       id="checkbox_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['slug'],'/','___');?>
">
                <input type="submit" id="update_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['slug'],'/','___');?>
" value="Обновить">
            <?php }?>
        <?php }?>

        <?php /*  Call merged included template "../../includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15084998325a7f4f2bf27470-43140871');
content_5a7f4f2c4a38f6_09910415($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/requirements.html" */?>
    </td>

</tr>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:40
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4f2c4a38f6_09910415')) {function content_5a7f4f2c4a38f6_09910415($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['requirements'])){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('warning', null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(false, null, 0);?>
        <?php if (!isset($_smarty_tpl->tpl_vars['class']->value)){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("small red", null, 0);?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['icon']->value)){?><?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(false, null, 0);?><?php }?>
        <ul class="menu-v">
            <?php  $_smarty_tpl->tpl_vars['requirement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requirement']->_loop = false;
 $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['requirements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requirement']->key => $_smarty_tpl->tpl_vars['requirement']->value){
$_smarty_tpl->tpl_vars['requirement']->_loop = true;
 $_smarty_tpl->tpl_vars['subject']->value = $_smarty_tpl->tpl_vars['requirement']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['requirement']->value['warning']&&!$_smarty_tpl->tpl_vars['requirement']->value['passed'])){?> <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(true, null, 0);?>
                    <li>
                        <span class="<?php if (strstr($_smarty_tpl->tpl_vars['subject']->value,'app.')==$_smarty_tpl->tpl_vars['subject']->value){?>hint<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requirement']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php if ($_smarty_tpl->tpl_vars['icon']->value){?><i class="icon10 no<?php if ($_smarty_tpl->tpl_vars['requirement']->value['passed']){?>-bw<?php }?>"></i><?php }?>
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['requirement']->value['warning'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['requirement']->value['note'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                        </span>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['warning_meets']->value&&Smarty::$_smarty_vars['capture']['warning']){?>
        <?php echo Smarty::$_smarty_vars['capture']['warning'];?>

    <?php }?>
<?php }?>
<?php }} ?>