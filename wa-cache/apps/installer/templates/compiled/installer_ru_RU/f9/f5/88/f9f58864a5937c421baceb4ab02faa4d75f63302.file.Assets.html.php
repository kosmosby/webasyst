<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/assets/Assets.html" */ ?>
<?php /*%%SmartyHeaderCode:17935136555a7f4f30958001-75896607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f58864a5937c421baceb4ab02faa4d75f63302' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/assets/Assets.html',
      1 => 1452774829,
      2 => 'file',
    ),
    'a9f8ee7836b1799eca9cc96a7fb5519d3aba3d72' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/message.html',
      1 => 1452774829,
      2 => 'file',
    ),
    'd4661a7498a59923ecd327e7981396f22e858494' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '678a95911c9b02e35c77adcc18e071c0cabae92e' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/assets/Assets.row.html',
      1 => 1471267262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17935136555a7f4f30958001-75896607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'app' => 0,
    'app_id' => 0,
    'plugin' => 0,
    'item_id' => 0,
    'theme' => 0,
    'widget' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4f30ee7b33_33862710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4f30ee7b33_33862710')) {function content_5a7f4f30ee7b33_33862710($_smarty_tpl) {?><div class="shadowed">
    <?php /*  Call merged included template "../../includes/message.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f309ab281_88511595($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/message.html" */?>

    <table class="zebra i-updates" id="i-assets-list">
        <thead>
        <tr>
            <th class="min-width"></th>
            <th>Приложение</th>
            <th>Версия</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>

        <!-- list of available updates -->
        <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
            <?php if (empty($_smarty_tpl->tpl_vars['app']->value['virtual'])||!empty($_smarty_tpl->tpl_vars['app']->value['plugins'])){?>
                <?php /*  Call merged included template "./Assets.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Assets.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['app']->value,'item_id'=>$_smarty_tpl->tpl_vars['app_id']->value,'item_type'=>'app'), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f30a12a17_26432663($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Assets.row.html" */?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['plugins'])){?>
                <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                    <?php /*  Call merged included template "./Assets.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Assets.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['plugin']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'plugin'), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f30a12a17_26432663($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Assets.row.html" */?>
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
                    <?php if ($_smarty_tpl->tpl_vars['item_id']->value!='default'){?>
                        <?php /*  Call merged included template "./Assets.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Assets.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['theme']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'theme'), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f30a12a17_26432663($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Assets.row.html" */?>
                    <?php }?>
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
                    <?php /*  Call merged included template "./Assets.row.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Assets.row.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['widget']->value,'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item_type'=>'widget','app'=>$_smarty_tpl->tpl_vars['app']->value), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f30a12a17_26432663($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Assets.row.html" */?>
                <?php } ?>
            <?php }?>

        <?php } ?>

        </tbody>
    </table>
</div>

<script type="text/javascript">
    <!--
    $.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Активы").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $('#i-assets-list a.js-remove-item').click(function () {
        var $link = $(this);
        if (confirm($link.data('confirm'))) {
            $link.parent('li').find('form:first').submit();
        }
        return false;
    });
    $('#i-assets-list a.js-switch-item').click(function () {
        var $link = $(this);
        var url = $link.data('url');
        var data = $link.data('data');
        $link.data('url', null);
        $link.find('.icon16').removeClass('pause play').addClass('loading');
        if (url) {
            $.post(url, data, function (data, textStatus) {
                if (data.status == 'ok') {
                    $link.find('.icon16').removeClass('pause play loading').addClass('yes');
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);

                } else {
                    var message = '';
                    if (data.errors) {
                        for (var i = 0; i < data.errors.length; i++) {
                            message = (message ? (message + ' ') : '') + data.errors[i][0];
                        }
                    } else {
                        message = textStatus;
                    }
                    $link.parent().text(message)
                }

            });
        }
        return false;
    });


    //-->
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/message.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4f309ab281_88511595')) {function content_5a7f4f309ab281_88511595($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
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
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/assets/Assets.row.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4f30a12a17_26432663')) {function content_5a7f4f30a12a17_26432663($_smarty_tpl) {?><tr class="<?php if (in_array($_smarty_tpl->tpl_vars['item_type']->value,array('app','plugin'))&&empty($_smarty_tpl->tpl_vars['item']->value['enabled'])&&empty($_smarty_tpl->tpl_vars['app']->value['virtual'])){?>grey<?php }?>">
    <td class="i-update-icon">
        
        <?php if (($_smarty_tpl->tpl_vars['item_type']->value=='app')&&(!empty($_smarty_tpl->tpl_vars['item']->value['icons'][48])||!empty($_smarty_tpl->tpl_vars['item']->value['img']))){?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo ltrim((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value['icons'][48])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['img'] : $tmp))===null||$tmp==='' ? '' : $tmp),'/');?>
" alt="">
        <?php }else{ ?>
            &nbsp;
        <?php }?>

    </td>
    <td class="i-update-name">
        
        <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'||$_smarty_tpl->tpl_vars['item_type']->value=='theme'||$_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>
            
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['icons'])&&false){?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['icons'][16];?>
" alt="">
            <?php }else{ ?>
                <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>plugins<?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>widgets<?php }else{ ?>design<?php }?>"></i>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>
                <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['slug'],'wa-plugins/')===0){?>
                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('Плагин «<a href="%s">%s</a>»',"./#/plugins/".$_tmp1."/",htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true));?>

                <?php }else{ ?>
                <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['app'])===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php echo sprintf('Плагин «<a href="%s">%s</a>»',"./#/plugins/".$_tmp2."/".$_tmp3."/",htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true));?>

                <?php }?>
            <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='theme'){?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php echo sprintf('Тема дизайна «<a href="%s">%s</a>»',"./#/themes/".$_tmp4."/",htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true));?>

            <?php }elseif($_smarty_tpl->tpl_vars['item_type']->value=='widget'){?>
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php echo sprintf('Виджет «<a href="%s">%s</a>»',"./#/widgets/".$_tmp5."/",htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true));?>

            <?php }else{ ?>
                <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
        <?php }else{ ?>
            
            <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='systemplugin'){?>
                <strong><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php echo sprintf('Плагин «<strong>%s</strong>»',$_tmp6);?>
</strong>
            <?php }elseif(empty($_smarty_tpl->tpl_vars['item']->value['virtual'])){?>
                <a href="./#/apps/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
/"><strong class="large"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
            <?php }else{ ?>
                <a href="./#/plugins/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
/"><strong class="large"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
            <?php }?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['vendor_name'])&&empty($_smarty_tpl->tpl_vars['item']->value['virtual'])){?>
            <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vendor_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php }?>
    </td>

    <td class="i-update-data">
        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['installed']['version'])){?>
            <span class="<?php if ($_smarty_tpl->tpl_vars['item_type']->value=='app'){?> bold<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['installed']['version'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['item_type']->value!='theme')&&empty($_smarty_tpl->tpl_vars['item']->value['virtual'])){?>
            <?php if ($_smarty_tpl->tpl_vars['item_type']->value!='widget'&&($_smarty_tpl->tpl_vars['item_type']->value!='plugin'||empty($_smarty_tpl->tpl_vars['app']->value['virtual']))){?>
                <?php if (empty($_smarty_tpl->tpl_vars['item']->value['enabled'])){?>
                    (Выключен)
                <?php }?>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['item']->value['applicable']){?>
                <i class="icon10 exclamation"></i>
                Системные требования не выполнены:
            <?php }?>
            <?php /*  Call merged included template "../../includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17935136555a7f4f30958001-75896607');
content_5a7f4f30c479d6_16801293($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/requirements.html" */?>
        <?php }?>
    </td>

    <td>
        <?php if (empty($_smarty_tpl->tpl_vars['item']->value['virtual'])&&(!in_array($_smarty_tpl->tpl_vars['item_type']->value,array('plugin','widget'))||!empty($_smarty_tpl->tpl_vars['app']->value['enabled'])||!empty($_smarty_tpl->tpl_vars['app']->value['virtual'])||($_smarty_tpl->tpl_vars['item_type']->value=='app'))){?>
        <ul class="menu-h with-icons float-right">
            <?php if (in_array($_smarty_tpl->tpl_vars['item_type']->value,array('plugin','app'))){?>
                <?php if (($_smarty_tpl->tpl_vars['item_type']->value!='widget')&&empty($_smarty_tpl->tpl_vars['app']->value['virtual'])&&empty($_smarty_tpl->tpl_vars['item']->value['system'])){?>
                    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['enabled'])){?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['applicable']){?>
                            <li><a href="#/assets/"
                                   data-url="?module=<?php echo $_smarty_tpl->tpl_vars['item_type']->value;?>
s&action=enable"
                                   data-data="app_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>&plugin_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['id'])===null||$tmp==='' ? 'wtf' : $tmp);?>
<?php }?>"
                                   style="color: #03c; display: block" class="js-switch-item"><i class="icon16 play"></i>Включить</a></li>
                        <?php }else{ ?>
                            
                        <?php }?>
                    <?php }else{ ?>
                        <li><a href="#/assets/"
                               data-url="?module=<?php echo $_smarty_tpl->tpl_vars['item_type']->value;?>
s&action=disable"
                               data-data="app_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['item_type']->value=='plugin'){?>&plugin_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['id'])===null||$tmp==='' ? 'wtf' : $tmp);?>
<?php }?>"
                               class="gray js-switch-item" style="display: block"><i class="icon16 pause"></i>Выключить</a></li>
                    <?php }?>
                <?php }?>

            <?php }?>
            <?php if (empty($_smarty_tpl->tpl_vars['item']->value['system'])&&(!in_array($_smarty_tpl->tpl_vars['item_type']->value,array('app','plugin'))||($_smarty_tpl->tpl_vars['item_type']->value=='plugin'&&!empty($_smarty_tpl->tpl_vars['app']->value['virtual']))||!empty($_smarty_tpl->tpl_vars['item']->value['enabled']))){?>
            <li><a href="#/assets/" class="js-remove-item" style="color: #03c; display: block" data-confirm="Это полностью удалит код и данные приложения без возможности восстановления. Вы уверены?"><i class="icon16 delete"></i>Удалить</a>
                <?php if ($_smarty_tpl->tpl_vars['item_type']->value=='app'){?><?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable('app_id', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable('extras_id', null, 0);?><?php }?>
                <form action="?module=<?php echo $_smarty_tpl->tpl_vars['item_type']->value;?>
s&action=remove" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value['installed']['vendor'])===null||$tmp==='' ? 'webasyst' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"/>
                </form>
                <?php }?>
            </li>
            <?php }?>
        </ul>

    </td>
</tr>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:59:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4f30c479d6_16801293')) {function content_5a7f4f30c479d6_16801293($_smarty_tpl) {?>
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