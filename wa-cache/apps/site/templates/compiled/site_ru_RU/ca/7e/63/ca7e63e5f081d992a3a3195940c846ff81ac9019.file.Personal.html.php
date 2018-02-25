<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:48:04
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/personal/Personal.html" */ ?>
<?php /*%%SmartyHeaderCode:14453669085a7f4c74532b91-81473211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7e63e5f081d992a3a3195940c846ff81ac9019' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/personal/Personal.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14453669085a7f4c74532b91-81473211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'auth_enabled' => 0,
    'apps' => 0,
    'key' => 0,
    'key_apps' => 0,
    'app_id' => 0,
    'app' => 0,
    'auth_app' => 0,
    'profile_disabled' => 0,
    'domain_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4c74612dd3_03028336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4c74612dd3_03028336')) {function content_5a7f4c74612dd3_03028336($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" type="text/css" >
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js"></script>

<div class="sidebar left250px s-internal-sidebar"<?php if (!$_smarty_tpl->tpl_vars['auth_enabled']->value){?> style="overflow:hidden; width: 0"<?php }?>>
    <div class="block not-padded">

        <?php  $_smarty_tpl->tpl_vars['key_apps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key_apps']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key_apps']->key => $_smarty_tpl->tpl_vars['key_apps']->value){
$_smarty_tpl->tpl_vars['key_apps']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['key_apps']->key;
?>
        <ul id="apps-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="menu-v with-icons s-personal-structure stack">
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['key_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
            <li id="s-personal-app-<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" data-app="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['link'])){?>data-link="<?php echo $_smarty_tpl->tpl_vars['app']->value['link'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['app_id']->value==$_smarty_tpl->tpl_vars['auth_app']->value){?> data-auth-app="1"<?php }?>>
                <a href="#/personal/app/<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
/"<?php if ($_smarty_tpl->tpl_vars['key']->value=='disabled'){?> class="s-disabled"<?php }?>>
                    <span class="s-onoff">
                        <?php if ($_smarty_tpl->tpl_vars['key']->value=='enabled'){?><i class="icon16 sort"></i><?php }?>
                        <i class="icon10 status <?php if ($_smarty_tpl->tpl_vars['key']->value=='enabled'){?>status-green<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='disabled'){?>no<?php }else{ ?>no-bw<?php }?>"></i>
                    </span>

                    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][16];?>
">
                    <?php echo implode('<br>',$_smarty_tpl->tpl_vars['app']->value['items']);?>

                </a>
            </li>
            <?php } ?>
        </ul>
        <?php } ?>
        <ul class="menu-v with-icons s-personal-structure">
            <li id="s-personal-profile-link">
                <a href="#/personal/profile/"<?php if (!empty($_smarty_tpl->tpl_vars['profile_disabled']->value)){?> class="s-disabled"<?php }?>>
                    <span class="s-onoff">
                        <i class="icon10 status <?php if (empty($_smarty_tpl->tpl_vars['profile_disabled']->value)){?>status-green<?php }else{ ?>no<?php }?>"></i>
                    </span>
                    <i class="icon16 user"></i>Мой профиль
                </a>
            </li>
        </ul>

        <div class="block double-padded align-center">
            <p class="hint">
                Структура личного кабинета определяется списком установленных и подключенных на данном сайте приложений Webasyst.
            </p>
            <p class="small">
                <a id="s-personal-settings-link" <?php if ($_smarty_tpl->tpl_vars['auth_enabled']->value){?>data-enabled="1"<?php }?> href="#/personal/settings/" class="no-underline"><i class="icon10 settings"></i> <strong>Настройки авторизации</strong></a>
            </p>
        </div>
    </div>
</div>

<div class="content left250px"<?php if (!$_smarty_tpl->tpl_vars['auth_enabled']->value){?> style="margin-left: 0"<?php }?>>
    <div class="s-editor s-white bordered-left">
        <div class="block double-padded s-personal" id="s-personal-content">
            <i class="icon16 loading"></i>
        </div>
        <div class="clear-both"></div>
    </div>
</div>

<script type="text/javascript">
    $("#apps-enabled").sortable({
        distance: 5,
        helper: function(e, li) {
            var $originals = li.children();
            var $helper = li.clone();
            $helper.children().each(function(index){
                // Set helper cell sizes to match the original sizes
                $(this).width($originals.eq(index).width())
            });
            return $helper;
        },
        items: 'li',
        handle: "i.sort",
        opacity: 0.75,
        tolerance: 'pointer',
        stop: function (event, ui) {
            var apps = [];
            $('#apps-enabled li').each(function () {
                apps.push($(this).data('app'));
            })
            $.post("?module=personal&action=appMove&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
" , { apps: apps}, function () {
            }, "json");
        }
    });
</script><?php }} ?>