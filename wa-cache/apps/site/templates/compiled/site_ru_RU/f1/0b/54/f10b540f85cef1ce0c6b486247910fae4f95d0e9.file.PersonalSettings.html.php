<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:48:04
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/personal/PersonalSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:1179635465a7f4c74924005-48766676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10b540f85cef1ce0c6b486247910fae4f95d0e9' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/templates/actions/personal/PersonalSettings.html',
      1 => 1511525901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179635465a7f4c74924005-48766676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
    'auth_apps' => 0,
    'domain_id' => 0,
    'auth_config' => 0,
    'wa' => 0,
    'app' => 0,
    'wa_url' => 0,
    'personal_sidebar' => 0,
    'items' => 0,
    'app_id' => 0,
    'k' => 0,
    'item' => 0,
    'auth_adapters' => 0,
    'adapter_id' => 0,
    'adapter' => 0,
    'control_name' => 0,
    'control_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4c74bc5875_53231983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4c74bc5875_53231983')) {function content_5a7f4c74bc5875_53231983($_smarty_tpl) {?><h1><?php echo sprintf('Авторизация на %s',$_smarty_tpl->tpl_vars['domain']->value);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['auth_apps']->value){?>
<form id="s-auth-enable-form" class="s-auth-form" method="post" action="?module=personal&action=authEnable&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
">
    <div class="s-ibutton-checkbox">
        <ul class="menu-h s-ibutton-checkbox">
            <li><span id="s-personal-app-disabled-label" class="gray">Выключена</span></li>
            <li>
                <div style="">
                <input id="s-auth-enabled" name="enabled" class="ibutton" type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['auth_apps']->value){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['auth_config']->value['auth']){?>checked="checked"<?php }?> />
                </div>
            </li>
            <li><span id="s-personal-app-enabled-label">Включена</span></li>
        </ul>
        <br>
        <p <?php if ($_smarty_tpl->tpl_vars['auth_config']->value['auth']){?> style="display:none"<?php }?> class="gray"><i class="icon10 no-bw top-padded"></i> <?php echo sprintf('Регистрация пользователей, авторизация и личный кабинет выключены на сайте %s.',$_smarty_tpl->tpl_vars['domain']->value);?>
</p>
    </div>

    <div class="s-auth-content" <?php if (!$_smarty_tpl->tpl_vars['auth_config']->value['auth']){?> style="display:none"<?php }?>>
        <p><i class="icon10 yes top-padded"></i> <?php echo sprintf('Регистрация пользователей, авторизация и личный кабинет включены на %s. <a id="configure-app" href="#" class="inline-link"><b><i>Настроить</i></b></a>',$_smarty_tpl->tpl_vars['domain']->value);?>
</p>
        <div id="configure-app-div" class="block s-configure-app-div" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('hash')!='configure-app'){?>style="display: none;"<?php }?>>
            <p>Выберите приложение, которое будет отвечать за функциональность форм регистрации и авторизации пользователей на этом сайте. Адреса страниц регистрации, входа и личного кабинета будут определяться правилами маршрутизации выбранного приложения:</p>
            <ul class="menu-v s-auth-host-app">
                <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
                <li>
                    <input id="s-auth-app-<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
" type="radio" name="app_id" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['app']->value['id']==$_smarty_tpl->tpl_vars['auth_config']->value['app']){?>checked="checked"<?php }?>>
                    <label for="s-auth-app-<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
">
                        <img class="s-app16x16icon-menu-v" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][16];?>
"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <span class="hint"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['app']->value['login_url']);?>
</span>
                    </label>
                </li>
                <?php } ?>
            </ul>
            <br>
            <input type="submit" name="save" value="Сохранить">
            <em class="s-settings-form-status small" style="display:none">Сохранено</em>
        </div>
    </div>
</form>

<div class="s-auth-content"<?php if (!$_smarty_tpl->tpl_vars['auth_config']->value['auth']){?> style="display:none"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['personal_sidebar']->value){?>
        <ul id="s-personal-settings-tabs" class="tabs s-auth-settings">
            <li class="selected">
                <a href="#/personal/settings/">Авторизация</a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['personal_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li>
                <a href="#/personal/settings/<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
/" data-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>
    <?php }?>

    <!-- misc auth settings form -->
    <div id="s-personal-settings-auth" class="tab-content">
        <div class="block not-padded top-padded">
            <form class="s-auth-form" method="post" action="?module=personal&action=settingsSave&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
" style="margin-left:-3px;padding-left:3px;">

                <!-- captcha -->
                <div class="block not-padded bottom-padded">
                    <input type="hidden" name="auth_captcha" value="0">
                    <input id="s-auth-captcha" name="auth_captcha" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['auth_config']->value['signup_captcha']){?>checked="checked"<?php }?> value="1">
                    <label for="s-auth-captcha">Требовать ввод капчи (captcha) в форме регистрации</label><br>
                </div>

                <div class="block not-padded bottom-padded">
                    <label>
                    <input name="auth_rememberme" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['rememberme'])){?>checked="checked"<?php }?> value="1">
                    Можно включить «Запомнить меня» в форме авторизации
                    </label>
                </div>

                <!-- third-party auth -->
                <div>
                    <input id="s-auth-adapters" name="auth_adapters" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'])){?>checked="checked"<?php }?>>
                    <label for="s-auth-adapters">
                        Авторизация через внешние сервисы
                        <p class="hint">Позволяет посетителям вашего сайта быстро зарегистрироваться или авторизоваться через аккаунты в популярных сторонних сервисах, например, через «Фейсбук» или «Твиттер». <a href="http://www.webasyst.ru/developers/docs/auth/auth-adapters/" target="_blank">Документация по настройке</a> <i class="icon10 new-window"></i></p>
                    </label>
                </div>

                <div id="s-auth-adapters-list" class="block double-padded" style="background: #f7f7f7; margin-bottom: 20px;<?php if (empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'])){?>display:none<?php }?>">
                    <ul class="menu-v">
                        <?php  $_smarty_tpl->tpl_vars['adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adapter']->_loop = false;
 $_smarty_tpl->tpl_vars['adapter_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adapter']->key => $_smarty_tpl->tpl_vars['adapter']->value){
$_smarty_tpl->tpl_vars['adapter']->_loop = true;
 $_smarty_tpl->tpl_vars['adapter_id']->value = $_smarty_tpl->tpl_vars['adapter']->key;
?>
                        <li>
                            <input class="adapter" id="s-auth-adapter-<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" name="adapter_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?>checked="checked"<?php }?>>
                            <label for="s-auth-adapter-<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
">
                                <img style="vertical-align: middle; padding-bottom: 3px;" alt="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getIcon();?>
">
                                <?php echo $_smarty_tpl->tpl_vars['adapter']->value->getName();?>

                            </label>
                            <div class="adapter-controls"<?php if (empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?> style="display:none"<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['control_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['control_name']->_loop = false;
 $_smarty_tpl->tpl_vars['control_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adapter']->value->getControls(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['control_name']->key => $_smarty_tpl->tpl_vars['control_name']->value){
$_smarty_tpl->tpl_vars['control_name']->_loop = true;
 $_smarty_tpl->tpl_vars['control_id']->value = $_smarty_tpl->tpl_vars['control_name']->key;
?>
                            <div class="field">
                                <div class="name" style="width: 120px;">
                                    <span class="small"><?php echo $_smarty_tpl->tpl_vars['control_name']->value;?>
</span>
                                </div>
                                <div class="value" style="margin-left: 130px;"><input type="text" name="adapters[<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['control_id']->value;?>
]" value="<?php if (!empty($_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value])){?><?php echo $_smarty_tpl->tpl_vars['auth_config']->value['adapters'][$_smarty_tpl->tpl_vars['adapter_id']->value][$_smarty_tpl->tpl_vars['control_id']->value];?>
<?php }?>" style="font-size: 0.9em;"></div>
                            </div>
                            <?php } ?>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div>
                    <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/personal/PersonalSettingsSignup.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div class="clear"></div>
                </div>

                <div>
                    <input type="submit" name="save" class="button green" value="Сохранить">
                    <em class="s-settings-form-status small" style="display:none">Сохранено</em>
                </div>
            </form>
         </div>
    </div>
    <div id="s-personal-settings-content" class="tab-content" style="display: none">
    </div>
</div>
<script type="text/javascript">
    $(function () {

        $('#configure-app').click(function() {
            $('#configure-app-div').slideToggle(200);
            return false;
        });

        $("#s-auth-enabled").iButton({
            labelOn: "",
            labelOff: "",
            classContainer: 'ibutton-container mini'
        });
        var status_check = function(item) {
            if ($(item).is(':checked')) {
                $('#s-personal-app-disabled-label').addClass('gray');
                $('#s-personal-app-enabled-label').removeClass('gray');
            } else {
                $('#s-personal-app-disabled-label').removeClass('gray');
                $('#s-personal-app-enabled-label').addClass('gray');
            }
        };
        status_check($('#s-auth-enabled'));
        $('#s-auth-enabled').change(function(){
            status_check(this);
            var enabled = $(this).is(':checked') ? 1 : 0;
            $.post('?module=personal&action=authEnable&domain_id=<?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
', $('#s-auth-enable-form').serialize(), function () {
                if (enabled) {
                    $('div.s-ibutton-checkbox p.gray').hide();
                    $(".s-auth-content").show();
                    $('#s-content > .sidebar').animate({ width: 250});
                    $('#s-content > .content').animate({ marginLeft: 250});
                } else {
                    $('div.s-ibutton-checkbox p.gray').show();
                    $('#s-content > .sidebar').css('overflow', 'hidden').animate({ width: 0});
                    $('#s-content > .content').animate({ marginLeft: 0});
                    $(".s-auth-content").hide();
                }
            }, "json");
        });

        $("input.adapter").click(function () {
            var el = $(this).parent().find('div.adapter-controls');
            if ($(this).is(':checked')) {
                el.show();
            } else {
                el.hide();
            }
        });

        $("#s-auth-adapters").click(function () {
            $("#s-auth-adapters-list").slideToggle(200);
        });

        $(".s-auth-form").submit(function () {
            var f = $(this);
            $.post(f.attr('action'), f.serialize(), function (response) {
                if (response.status == 'ok') {
                    f.find(".s-settings-form-status").fadeIn(200, function () {
                        f.find(".s-settings-form-status").delay(1000).fadeOut(500,function(){
                            $('#configure-app-div').slideToggle(200);
                        });
                    });                    //location.reload();
                    f.find('.button.yellow').removeClass('yellow').addClass('green');
                } else {
                    f.find(".s-settings-form-status").html(response.errors ? response.errors : response).css('color', 'red');
                    f.find(".s-settings-form-status").fadeIn("slow");
                }
            }, "json");
            return false;
        });

        // Turn button from green to yellow when something's changed in the form
        setTimeout(function() { "use strict";
            var $button = $('form.s-auth-form .button.green').last();
            var $form = $button.closest('form');
            $form.on('change keyup', function() {
                $button.removeClass('green').addClass('yellow');
            });
        }, 50);
    });
</script>
<?php }else{ ?>
    <p>Чтобы сделать доступной авторизацию на этом сайте, установите хотя бы одно приложение, которое поддерживает формы авторизации,  и настройте для него маршрутизацию.</p>
<?php }?><?php }} ?>