<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:56
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:4510787235a7f4f002559e2-77536060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559a2f37f80c458272187899b0099b88923dcff9' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/settings/Settings.html',
      1 => 1509716415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4510787235a7f4f002559e2-77536060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'wa' => 0,
    'settings' => 0,
    'locales' => 0,
    'locale' => 0,
    'locale_name' => 0,
    'backgrounds' => 0,
    'b' => 0,
    'wa_url' => 0,
    'images' => 0,
    'i' => 0,
    'images_url' => 0,
    'images_path' => 0,
    'image' => 0,
    'locale_adapter' => 0,
    'map_adapters' => 0,
    'a' => 0,
    'adapter_id' => 0,
    'map_adapter_settings' => 0,
    'config' => 0,
    'version' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4f005152c2_35276200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4f005152c2_35276200')) {function content_5a7f4f005152c2_35276200($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_format_file_size')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_format_file_size.php';
?><div class="shadowed">
    <div class="i-white-core-content">

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
                    <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true));?>

                </div>
            <?php } ?>
        <?php }?>

        <div class="block double-padded">

            <div class="fields form">

                <form action="?module=settings" enctype="multipart/form-data" method="POST">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                <label for="config-name">Название компании</label>
                            </div>
                            <div class="value">
                                <input type="text" class="large" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-name">
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">
                                <label for="config-url">Адрес сайта</label>
                            </div>
                            <div class="value">
                                <input type="text" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-url"><br>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['locales']->value){?>
                            <div class="field">
                                <div class="name">
                                    <label for="config-locale">Язык интерфейса Вебасиста по умолчанию</label>
                                </div>
                                <div class="value no-shift">
                                    <select name="locale" id="config-locale">
                                        <?php  $_smarty_tpl->tpl_vars['locale_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['locale_name']->_loop = false;
 $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['locale_name']->key => $_smarty_tpl->tpl_vars['locale_name']->value){
$_smarty_tpl->tpl_vars['locale_name']->_loop = true;
 $_smarty_tpl->tpl_vars['locale']->value = $_smarty_tpl->tpl_vars['locale_name']->key;
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locale']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['locale']==$_smarty_tpl->tpl_vars['locale']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locale_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>

                        <div class="field">
                            <div class="name">
                                <label for="config-email">Email</label>
                            </div>
                            <div class="value">
                                <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-email" placeholder="your@email"><br>
                                <span class="hint">Основной электронный адрес администратора, на который будут отправляться системные уведомления.</span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="name">
                                <label for="config-sender">Отправитель</label>
                            </div>
                            <div class="value">
                                <input type="text" name="sender" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['sender'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-sender" placeholder="noreply@email"><br>
                                <span class="hint">Этот электронный адрес будет указан в качестве обратного адреса в системных email-уведомлениях, отправляемых Вебасистом.</span>
                            </div>
                        </div>
                    </div>

                    <div class="field-group">

                        <div class="field">
                            <div class="name">
                                Авторизация пользователей
                            </div>
                            <div class="value no-shift">
                                <input type="checkbox" name="rememberme" id="rememberme-auth-login" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['rememberme']){?>checked="checked"<?php }?>>
                                <label for="rememberme-auth-login">Можно включить «Запомнить меня» при входе в Вебасист</label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="name">
                                Фон формы авторизации
                            </div>
                            <div class="value">

                            </div>
                            <div class="value">
                                <ul class="i-image-select">
                                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backgrounds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                                        <li<?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']=="stock:".((string)$_smarty_tpl->tpl_vars['b']->value)){?> class="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="#" data-value="stock:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img
                                                        src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/backgrounds/thumbs/<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
"></a></li>
                                    <?php } ?>
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']==$_smarty_tpl->tpl_vars['i']->value){?> class="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="#" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img
                                                        src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
?t=<?php echo filemtime(((string)$_smarty_tpl->tpl_vars['images_path']->value)."/".((string)$_smarty_tpl->tpl_vars['i']->value));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></a></li>
                                    <?php } ?>
                                </ul>
                                <input type="hidden" name="auth_form_background_thumb" value="">
                            </div>
                            <div class="value">
                                <input type="file" name="auth_form_background"><br>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']){?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['image']->value)&&$_smarty_tpl->tpl_vars['image']->value){?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/webasyst/<?php echo $_smarty_tpl->tpl_vars['image']->value['file_name'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['image']->value['file_mtime'];?>
" style="max-width: 500px;"
                                             alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <br>
                                        <span class="hint"><?php echo $_smarty_tpl->tpl_vars['image']->value['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['image']->value['height'];?>
, <?php echo smarty_modifier_wa_format_file_size($_smarty_tpl->tpl_vars['image']->value['file_size'],'%0.0f','Б,КБ,МБ');?>
</span>
                                        <a class="small" href="?module=settings&amp;action=remove&amp;setting[]=auth_form_background&amp;setting[]=auth_form_background_stretch"
                                           onClick="return confirm(this.title);" title="Удалить фоновое изображение формы авторизации?">Удалить</a>
                                    <?php }elseif($_smarty_tpl->tpl_vars['image']->value===null){?>
                                        <span class="hint">Файл не найден <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['auth_form_background'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']){?>
                                <div class="value" <?php if (empty($_smarty_tpl->tpl_vars['image']->value)){?> style="display: none;" <?php }?>>
                                    <input type="checkbox" value="1" name="auth_form_background_stretch" id="installer-auth-stretch-background"
                                           <?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background_stretch']){?>checked="checked"<?php }?>> <label for="installer-auth-stretch-background">Stretch to fill
                                        entire screen</label>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['locale_adapter']->value)){?>
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Локализация</div>
                                <div class="value no-shift">
                                    <select name="locale_adapter">
                                        <option <?php if ($_smarty_tpl->tpl_vars['locale_adapter']->value=='gettext'){?>selected<?php }?> value="gettext">Gettext (рекомендуется)</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['locale_adapter']->value=='php'){?>selected<?php }?> value="php">PHP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php }?>


                    <?php if (!empty($_smarty_tpl->tpl_vars['map_adapters']->value)){?>
                        <div class="field">
                            <div class="name">Карты</div>
                            <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getId(), null, 0);?>
                                <div class="value no-shift">
                                    <label>
                                        <input type="radio" name="map_adapter" <?php if ($_smarty_tpl->tpl_vars['settings']->value['map_adapter']==$_smarty_tpl->tpl_vars['adapter_id']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['a']->value->getName();?>

                                    </label>

                                </div>
                                <?php $_smarty_tpl->tpl_vars['map_adapter_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getSettingsHtml(array('namespace'=>'map_settings')), null, 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['map_adapter_settings']->value)){?>
                                    <div class="value no-shift js-map-adapter-settings" data-adapter-id="<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" style="display: none;">
                                        <?php echo $_smarty_tpl->tpl_vars['map_adapter_settings']->value;?>

                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    <?php }?>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Разработчик
                            </div>
                            <div class="value no-shift">
                                <input type="checkbox" name="config[debug]" value="1" <?php if (isset($_smarty_tpl->tpl_vars['config']->value['debug'])&&$_smarty_tpl->tpl_vars['config']->value['debug']){?>checked="checked" <?php }?>id="config-debug-checkbox">
                                <label for="config-debug-checkbox">Режим отладки (debug mode)<br/><span class="hint">Режим отладки отключает кеширование и включает подробный вывод сообщений об ошибках. Рекомендуется включить при разработке приложений.</span></label>
                            </div>
                            <div class="value">
                                <input type="button" name="clear_cache" value="Очистить кеш">
                                <span id="installer-cache-state" style="display: none;"><!-- state placeholder --></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">
                                Версия Вебасиста
                            </div>
                            <div class="value no-shift"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
                        </div>
                    </div>

                    <div class="field-group">
                        <div class="field">
                            <div class="value submit">
                                <input type="submit" class="button green" value="Сохранить">
                            </div>
                        </div>

                    </div>

                </form>

            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.installer_settings.init();
    });

</script>
<?php }} ?>