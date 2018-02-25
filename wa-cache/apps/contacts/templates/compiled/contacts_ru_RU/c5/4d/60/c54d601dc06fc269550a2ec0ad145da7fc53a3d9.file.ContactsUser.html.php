<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:20
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsUser.html" */ ?>
<?php /*%%SmartyHeaderCode:11063503655a7ff97c561337-82861610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c54d601dc06fc269550a2ec0ad145da7fc53a3d9' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsUser.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11063503655a7ff97c561337-82861610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'emails' => 0,
    'wa_app_url' => 0,
    'own_profile' => 0,
    'status' => 0,
    'access_disable_msg' => 0,
    'personal_portal_available' => 0,
    'superadmin' => 0,
    'backend_url' => 0,
    'limited_own_profile' => 0,
    'password_block' => 0,
    'access_to_contacts' => 0,
    'gFullAccess' => 0,
    'fullAccess' => 0,
    'noAccess' => 0,
    'gNoAccess' => 0,
    'groups' => 0,
    'id' => 0,
    'name' => 0,
    'all_groups' => 0,
    'apps' => 0,
    'app_id' => 0,
    'wa_url' => 0,
    'app' => 0,
    'readonly' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff97c9d0e94_28079664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff97c9d0e94_28079664')) {function content_5a7ff97c9d0e94_28079664($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?>

<?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['emails'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact']->value->get('email','value'), null, 0);?>
<?php if (is_array($_smarty_tpl->tpl_vars['emails']->value)&&$_smarty_tpl->tpl_vars['emails']->value){?>
    <?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['emails']->value), null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "password_block", null); ob_start(); ?>
    <div id="c-password-block" style="display:none;">
        <form id="c-password-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=contacts&action=user&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
&a=passwd">
            <div class="c-one-tab">
                <div class="field">
                    <div class="name">Пароль</div>
                    <div class="value">
                        <a href="javascript:void(0)" class="small inline-link c-tab-toggle"><b><i>изменить пароль</i></b></a><br>
                        <span class="hint">Для доступа в личный кабинет и в бекенд используется единый пароль.</span>
                    </div>
                </div>
            </div>
            <div class="c-two-tab" style="display:none;">
                <div class="field ">
                    <div class="name">Новый пароль</div>
                    <div class="value">
                        <input name="password" type="password" class="c-password-input" autocomplete="off" />
                    </div>
                </div>
                <div class="field">
                    <div class="name">Подтверждение пароля</div>
                    <div class="value">
                        <input name="confirm_password" type="password" class="c-confirm-password-input" autocomplete="off" />
                    </div>
                </div>
                <div class="field">
                    <div class="value">
                        <input type="submit" class="button green" value="Сохранить"> или
                        <a class="inline-link cancel c-tab-toggle" href="javascript:void(0)"><b><i>отменить</i></b></a>
                        <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="block not-padded" style="width: 100%; float: left; display: block;">
    <div class="fields">
        <div class="field">
            <div class="name">Доступ</div>
            <div class="value c-ibutton-checkbox">
                <div class="left" style="width: 45%;">
                    <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                    <ul class="menu-h">
                        <li><span class="status <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']!='-1'){?>off<?php }?>">Выключен</span></li>
                        <li><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']!='-1'){?>checked<?php }?> id="c-access"></li>
                        <li><span class="status <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']=='-1'){?>off<?php }?>">Включен</span></li>
                    </ul>
                    <?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']=='-1'){?>Выключен<?php }else{ ?>Включен<?php }?>
                    <?php }?>
                </div>
                <div class="right" style="width: 53%;">

                    <div class="field c-shown-on-enabled" id="tc-user-status-field" style="<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']==='-1'){?>display:none;<?php }?>">
                        <div class="name" style="width: 100%;">Статус:
                            <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['contact']->value->getStatus(), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['status']->value=='online'){?>
                                <span class="bold">
                                    <i class="icon10 online"></i> <span class="c-user-status-online">Онлайн</span>
                                </span>
                            <?php }else{ ?>
                                <span class="bold">
                                    <i class="icon10 status-yellow"></i> <span class="c-user-status-offline">
                                        Офлайн
                                            <?php if (!$_smarty_tpl->tpl_vars['contact']->value['last_datetime']){?>
                                                <span class="small no-bold">(никогда не входил в систему)</span>
                                            <?php }else{ ?>
                                                <span class="small no-bold">(last login: <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['contact']->value['last_datetime'],"datetime");?>
)</span>
                                            <?php }?>
                                    </span>
                                </span>
                            <?php }?>
                        </div>
                    </div>
                    <div id="tc-user-access-disabled" class="c-shown-on-disabled" style="<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']!='-1'){?>display:none;<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']=='-1'){?><?php echo $_smarty_tpl->tpl_vars['access_disable_msg']->value;?>
<?php }?>
                    </div>

                </div>
            </div>
        </div>

        <div class="field c-shown-on-enabled" id="tc-customer-portal-filed"  style="<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']==='-1'){?>display:none;<?php }?>">
            <div class="name">Личный кабинет</div>
            <div class="value">
                <p>
                    <?php if ($_smarty_tpl->tpl_vars['personal_portal_available']->value){?>
                        Доступен
                    <?php }else{ ?>
                        Недоступен
                    <?php }?><br>
                    <span class="hint">
                        Личный кабинет — это часть вашего сайта, доступная каждому зарегистрированному клиенту и содержащая персональнные данные клиента. Для доступа в личный кабинет клиентам потребуется авторизация с помощью email-адреса и пароля.
                        <?php if ($_smarty_tpl->tpl_vars['superadmin']->value){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
site/#/personal/settings" class="no-underline">Настройка личного кабинета</a> в приложении "Сайт"
                        <?php }?>
                    </span>
                </p>
            </div>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['limited_own_profile']->value)){?>
            <div class="field" style="margin-bottom: 10px;">
                <div class="name">Логин</div>
                <div class="value">
                    <span class="c-login"><?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['password_block']->value;?>

        <?php }?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['access_to_contacts']->value){?>

<div class="block not-padded c-shown-on-enabled" style="width: 100%; float:left; <?php if ($_smarty_tpl->tpl_vars['contact']->value['is_user']==='-1'){?>display:none;<?php }?>" id="c-available-resourses">
    <div class="fields">
        <?php if ($_smarty_tpl->tpl_vars['superadmin']->value){?>
            <div class="field">
                <div class="name">Бекенд</div>
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['gFullAccess']->value){?>
                        <p>
                            <strong class="large">Администратор</strong>
                            <span style="margin-left:1em">Этот уровень доступа унаследован от групп. Для изменения необходимо изменить настройки этих групп или вхождение данного пользователя в группы.</span>
                        </p>
                    <?php }elseif($_smarty_tpl->tpl_vars['fullAccess']->value&&!empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                        <p>
                            <strong class="large">Администратор</strong>
                            <span style="margin-left:1em">Вы не можете аннулировать административный уровень доступа для самого себя. Только другой Администратор может это сделать.</span>
                        </p>
                    <?php }else{ ?>
                        <select id="c-access-rights-toggle">
                            <option value="remove"<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&$_smarty_tpl->tpl_vars['noAccess']->value){?> selected="selected"<?php }?>>Нет доступа</option>
                            <option value="0"<?php if ((!$_smarty_tpl->tpl_vars['fullAccess']->value&&!$_smarty_tpl->tpl_vars['noAccess']->value)||(!$_smarty_tpl->tpl_vars['fullAccess']->value&&$_smarty_tpl->tpl_vars['contact']->value['is_user']=='1')){?> selected="selected"<?php }?>>Ограниченный доступ</option>
                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['fullAccess']->value){?> selected="selected"<?php }?>>Администратор</option>
                        </select>

                        <?php if (!$_smarty_tpl->tpl_vars['gNoAccess']->value){?>
                            <span id="c-access-rights-hint-warning" class="c-access-not-allowed-hint" style="display:none;color:red"><span>Нельзя установить &laquo;Нет доступа&raquo;, потому что некоторые права доступа унаследованы от групп. Для лишения прав доступа, измените настройки групп или вхождение данного пользователя в группы.</span></span>
                        <?php }?>

                        <i class="icon16 loading" style="margin-left:16px;display:none;white-space:normal"></i>
                        <span class="c-access-rights-hint c-access-saved-hint" style="display:none"><i class="icon10 yes"></i> Сохранено</span>
                    <?php }?>
                </div>
            </div>

            <div id="c-credentials-block" style="display:none;">
                <form id="c-credentials-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=contacts&action=user&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
&a=create_credentials">
                    <div class="field">
                        <div class="name">Логин</div>
                        <div class="value">
                            <input type="text" name="login" class="c-login-input" value="<?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" autocomplete="off" /><br>
                            <span class="hint">
                                Логин обязателен для доступа в бекенд.<br>
                                Пример: john, agent07, и т.д.
                            </span>
                        </div>
                    </div>
                    <div class="field ">
                        <div class="name">Новый пароль</div>
                        <div class="value">
                            <input name="password" type="password" class="c-password-input" autocomplete="off" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="name">Подтверждение пароля</div>
                        <div class="value">
                            <input name="confirm_password" type="password" class="c-confirm-password-input" autocomplete="off" /><br>
                            <span class="hint">Для доступа в личный кабинет и в бекенд используется единый пароль.</span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name"></div>
                        <div class="value">
                            <input type="submit" class="button green" value="Сохранить"> или
                            <a class="inline-link cancel" href="javascirt:void(0);"><b><i>отменить</i></b></a>
                        </div>
                    </div>
                </form>
            </div>

            <div id="c-login-block" style="display:none;">
                <form id="c-login-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=contacts&action=user&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
&a=create_login">
                    <div class="field">
                        <div class="name">Логин</div>
                        <div class="value">
                            <div class="c-one-tab">
                                <span class="c-login"><?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                                <a href="javascript:void(0)" class="small inline-link c-tab-toggle" style=""><b><i>изменить логин</i></b></a>
                            </div>
                            <div class="c-two-tab" style="display:none;">
                                <input type="text" name="login" class="c-login-input" value="<?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" autocomplete="off" /><br>
                                <span class="hint">
                                    Логин обязателен для доступа в бекенд.<br>
                                    Пример: john, agent07, и т.д.
                                </span><br><br>
                                <input type="submit" class="button green" value="Сохранить"> или
                                <a class="inline-link cancel c-tab-toggle" href="javascirt:void(0);"><b><i>отменить</i></b></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php echo $_smarty_tpl->tpl_vars['password_block']->value;?>


            <div class="c-shown-on-access">
                <div class="field">
                    <div class="name">Принадлежит к группам</div>
                    <div class="value">
                        <?php if ($_smarty_tpl->tpl_vars['groups']->value){?>
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
                                <a href="#/contacts/group/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php if (strlen($_smarty_tpl->tpl_vars['name']->value)>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&lt;без названия&gt;<?php }?></a><?php if (!$_smarty_tpl->tpl_vars['name']->last){?>,<?php }?>
                            <?php } ?>
                        <?php }else{ ?>
                            &lt;нет&gt;
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
                            <a href="javascript:void(0)" style="margin-left: 1.2em" class="small inline-link" id="open-customize-groups"><b><i>настроить группы</i></b></a>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
                    <form id="form-customize-groups" style="display:none;clear:left" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=groups&action=contactSave&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
                        <div class="field">
                            <div class="value">
                                <div class="c-checkbox-menu-container"><div>
                                    <ul class="menu-v compact with-icons c-checkbox-menu">
                                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
                                            <li><label><input type="checkbox" name="groups[]" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['id']->value])){?> checked="checked"<?php }?> /><?php if (strlen($_smarty_tpl->tpl_vars['name']->value)>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>&lt;без названия&gt;<?php }?></label></li>
                                        <?php } ?>
                                    </ul>
                                </div></div>
                            </div>
                            <div class="value">
                                <input type="hidden" name="set" value="1">
                                <input type="submit" class="button green" value="Сохранить">
                                или <a class="inline-link" href="javascript:void(0)" id="cancel-customize-groups"><b><i>отменить</i></b></a>
                                <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                            </div>
                        </div>
                    </form>
                <?php }?>
                <div class="field c-access-rights" id="c-access-rights-by-app">
                    <div class="name">Права доступа</div>
                    <div class="value c-access-rights" id="c-access-rights-wrapper">
                        <p>Права доступа в бекенде настраиваются для каждого приложения отдельно и складываются из прав персональных и унаследованных от групп.</p>
                        <table>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                                <tr id="c-ar-tr-<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" class="c-ar-app-row">
                                    <td class="c-app-icon">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['img'];?>
">&nbsp;
                                    </td>
                                    <td class="c-app-name">
                                        <span class="c-access-color-noaccess"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </td>
                                    <td class="c-app-access" style="min-width:400px;white-space:normal">
                                        <?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']>=2){?>
                                            Полный доступ унаследован от групп.
                                        <?php }else{ ?>
                                            <select name="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" style="float: left;margin:0 1.2em 12px 0">
                                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']){?> class="not-allowed"<?php }elseif(!$_smarty_tpl->tpl_vars['app']->value['customizable']){?> selected="selected"<?php }?>>Нет доступа</option>
                                                <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']){?> selected="selected"<?php }?>>Ограниченный доступ</option>
                                                <?php }?>
                                                <option value="2">Полный доступ</option>
                                            </select>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app']->value['customizable']){?>
                                                <a href="javascript:void(0)" class="small customize-link" style="display: none">Настроить</a>
                                            <?php }?>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app_id']->value=='contacts'){?>
                                                <i class="icon16 info c-ar-tooltip"></i>
                                                <div style="display:none" class="c-ar-tooltip-html"><i></i>
                                                    <strong>Внимание:</strong> Уровни доступа &laquo;Ограниченный&raquo; и &laquo;Полный&raquo; в приложении &laquo;Контакты&raquo; НЕ дают прав управления аккаунтами пользователей и категориями. Такие права имеет только Администратор.
                                                </div>
                                            <?php }?>

                                            
                                            <i class="icon16 loading" style="margin-left: 16px; display: none;"></i>
                                            <span class="c-access-saved-hint" style="display: none"><i class="icon10 yes"></i> Сохранено</span>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['app']->value['gaccess']>0){?>
                                                <span class="c-access-not-allowed-hint" style="display:none;color:red"><span>Нельзя установить &laquo;Нет доступа&raquo;, потому что некоторые права доступа унаследованы от групп. Для лишения прав доступа, измените настройки групп или вхождение данного пользователя в группы.</span></span>
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>

<?php }?>

<div class="clear-left"></div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tooltip/jquery.tooltip.patched.min.js"></script>

<?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')){?>

<script type="text/javascript">

<?php if (!$_smarty_tpl->tpl_vars['fullAccess']->value&&$_smarty_tpl->tpl_vars['noAccess']->value){?>
    $('.c-shown-on-access').hide();
<?php }else{ ?>
    $('.c-shown-on-access').show();
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['all_groups']->value){?>
    // Groups checklist
    $.wa.contactEditor.initCheckboxList('#form-customize-groups .c-checkbox-menu');
    $('#open-customize-groups').click(function() {
        $('#form-customize-groups').toggle();
    });
    $('#cancel-customize-groups').click(function() {
        var form = $('#form-customize-groups').hide();
        form.find('.loading').hide();
        form.find('.errormsg').remove();
        return false;
    });
    $('#form-customize-groups').submit(function() {
        var form = $(this);
        form.find('.errormsg').remove();
        form.find('.loading').show();
        $.post(form.attr('action'), form.serialize(), function(response) {
            if (response.status == 'ok') {
                <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('standalone')){?>
                    $.wa.controller.contactAction([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
, 'user']);
                <?php }?>
            } else if (response.status == 'fail') {
                form.find('.c-checkbox-menu-container').after($('<em class="errormsg">'+response.errors.join('<br />')+'</em>'));
            }
        }, 'json');
        return false;
    });
<?php }?>

    var login = <?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?>'<?php echo strtr($_smarty_tpl->tpl_vars['contact']->value['login'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php }else{ ?>null<?php }?>;
    var password = <?php if ($_smarty_tpl->tpl_vars['contact']->value['password']){?>true<?php }else{ ?>false<?php }?>;

    // create credentials form
    $("#c-credentials-form").submit(function () {
        var form = $(this);
        form.find('input.error').removeClass('error');
        form.find('.errormsg').remove();
        var login_input = form.find('.c-login-input');
        if (!$.trim(login_input.val())) {
            login_input.addClass('error').after('<em class="errormsg">'+"Логин обязателен."+'</em>');
            return false;
        }

        $.post(form.attr('action'), form.serialize(), function (r) {
            if (r.status === 'ok') {
                <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('standalone')){?>
                    $.wa.controller.reloadSidebar();
                <?php }?>
                login = r.data.login.trim();
                form.hide();
                $('#c-login-block').show()
                    .find('.c-login-input').val(login).end()
                    .find('.c-login').text(login);
                $('#c-access-rights-toggle').change();
            } else if (r.status === 'fail') {
                form.find('input[type="submit"]').parent().prepend($('<em class="errormsg" style="margin-bottom:10px">'+r.errors.join('<br>')+'</em>'));
            }
        }, 'json');
        return false;
    }).find('.cancel').click(function() {
        $('#c-credentials-block').hide();
        return false;
    });

    // change login form
    $("#c-login-form").submit(function () {
        var form = $(this);
        form.find('input.error').removeClass('error');
        form.find('.errormsg').remove();
        var login_input = form.find('.c-login-input');
        var login_value = $.trim(login_input.val());
        if (login === login_value) {
            return false;
        }
        if (!login_value) {
            login_input.addClass('error').after('<em class="errormsg">'+"Логин обязателен."+'</em>');
            return false;
        }

        $.post(form.attr('action'), form.serialize(), function (r) {
            if (r.status === 'ok') {
                <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('standalone')){?>
                    $.wa.controller.reloadSidebar();
                <?php }?>
                var new_login = r.data.login.trim()
                $('#c-login-block').show()
                    .find('.c-login-input').val(new_login).end()
                    .find('.c-login').text(new_login).end()
                    .find('.c-one-tab').show().end()
                    .find('.c-two-tab').hide();
                if (!login) {
                    login = new_login;
                    $('#c-access-rights-toggle').change();
                }
                login = new_login;
            } else if (r.status === 'fail') {
                form.find('input[type="submit"]').parent().prepend($('<em class="errormsg" style="margin-bottom:10px">'+r.errors.join('<br>')+'</em>'));
            }
        }, 'json');
        return false;
    }).find('.c-tab-toggle').click(function() {
        $("#c-login-form")
            .find('.c-one-tab').toggle().end()
            .find('.c-two-tab').toggle().end();
        var tab = $("#c-login-form").find('.c-two-tab');
        if (tab.is(':visible')) {
            tab.find('.c-login-input').focus();
        }
        return false;
    });

    // Change password form
    $('#c-password-form').submit(function() {
        var form = $(this);
        form.find('input.error').removeClass('error');
        form.find('.errormsg').remove();
        var password_input = form.find('.c-password-input');
        var confirm_password_input = form.find('.c-confirm-password-input');
        var pass = password_input.val();

        // do passwords match?
        if (pass !== confirm_password_input.val()) {
            password_input.addClass('error');
            confirm_password_input.after().after('<em class="errormsg">'+"Пароли не совпадают."+'</em>');
            return false;
        }

        form.find('.loading').show();
        $.post($.wa.contactEditor.getPasswdSaveUrl() || form.attr('action'), form.serialize(), function(response) {
            if (response.status === 'ok') {
                form.find('.errormsg').remove();
                form.find('.loading').hide();
                password = true;
                $('#c-password-block').show()
                    .find('.c-password-input').val('').end()
                    .find('.c-confirm-password-input').val('').end()
                    .find('.c-one-tab').show().end()
                    .find('.c-two-tab').hide();
            } else if (response.status === 'fail') {
                 confirm_password_input.after('<em class="errormsg">'+response.errors.join('<br />')+'</em>');
            }
        }, 'json');
        return false;
    }).find('.c-tab-toggle').click(function() {
        $("#c-password-form")
            .find('.c-one-tab').toggle().end()
            .find('.c-two-tab').toggle().end();
        var tab = $("#c-login-form").find('.c-two-tab');
        if (tab.is(':visible')) {
            tab.find('.c-password-input').focus();
        }
        return false;
    });

//
// Access control logic
//
$(function() {

    var arToggle = $('#c-access-rights-toggle');

    <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
        var accessCheckbox = $('#c-access');

        $('#c-info-tabs').bind('after_switch_tab', function() {
            $('#c-access').iButton({
                labelOn : "",
                labelOff : "",
                classContainer: 'ibutton-container mini'
            }).change(function () {
                var status = $(this).closest("div.c-ibutton-checkbox").find('span.status').removeClass('off');
                var fields = $('#tc-user').find('.fields:first');
                if (this.checked) {
                    status.eq("0").addClass('off');
                    var icon = $('#t-user').find('i.c-access-icon').removeClass('key key-bw delete');
                    if ($('#c-access-rights-toggle').val() === 'remove') {
                        icon.addClass('key-bw');
                    } else {
                        icon.addClass('key');
                    }
                    $('.available-resources').show();

                    var  isUser = <?php if ($_smarty_tpl->tpl_vars['contact']->value['login']){?>1<?php }else{ ?>0<?php }?>;
                    $.post('<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                        is_user: isUser,
                        only_is_user: 1
                    });

                    fields.removeClass('gray');
                    $('.c-shown-on-enabled').show();
                    $('.c-shown-on-disabled').hide();
                } else {
                    status.eq("1").addClass('off');
                    $('#t-user').find('i.c-access-icon').removeClass('key key-bw delete').addClass('delete');
                    $('.available-resources').hide();

                    $.post('<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                        is_user: -1,
                        only_is_user: 1
                    }, function(r) {
                        if (r.status === 'ok') {
                            $('#tc-user-access-disabled').show();
                            $('#tc-user-access-disabled').html(r.data.access_disable_msg);
                        }
                    }, 'json');

                    fields.addClass('gray');
                    $('.c-shown-on-enabled').hide();
                    $('.c-shown-on-disabled').show();
                }
            });
            $('#c-access').blur();
        });
    <?php }?>

    $($.wa.contactEditor).bind('set_mode', function(e, params) {
        if (params.field_id === 'email') {
            var emails = params.field.getValue();
            var email = '';
            if (!$.isEmptyObject(emails) && $.isArray(emails)) {
                email = emails[0].value;
                var f = $('#tc-user-login-filed');
                if (email) {
                    f.find('.email-value').html('<strong class="large">' + email + '</strong>');
                } else {
                    f.find('.email-value').html('<strong style="color:red">' + $_('Email address is not specified') + '</strong>');
                }
            }
        }
    });

    // apps data, including personal and group rights
    var apps = <?php echo json_encode($_smarty_tpl->tpl_vars['apps']->value);?>
;

    // true if user groups don't have any rights set up
    var gNoAccess = <?php echo $_smarty_tpl->tpl_vars['gNoAccess']->value;?>
;

    // Dialog to customize app access
    var openCustomizeDialog = function(cancelCallback) {
        if (typeof cancelCallback !== 'function') {
            cancelCallback = null;
        }
        var tr = $(this).parents('.c-ar-app-row');
        var app = apps[tr.find('select').attr('name')];

        $.wa.dialogCreate('c-ar-dialog', {
            url: '<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=rights&app='+app.id+'&id='+$.wa.contactEditor.contact_id,
            small: false,
            onload: function() {
                var dialog = $(this);

                // Change buttons
                dialog.find('.dialog-buttons-gradient').empty()
                    .append(
                        $('<input type="submit" class="button green" value="Сохранить">').click(function() {
                            $(this).attr('disabled', true);
                            dialog.find('.loading').show();
                            var form = dialog.find('form');
                            $.post(form.attr('action'), form.serialize(), $.wa.dialogHide, 'json');
                        })
                    )
                    .append(' '+$_('or')+' ')
                    .append(
                        $('<a href="javascript:void(0)" class="inline-link"><b><i>отменить</i></b></a>').click(function() {
                            $.wa.dialogHide();
                            if (cancelCallback) {
                                cancelCallback();
                            }
                        })
                    )
                    .append('<i class="icon16 loading" style="margin-left:16px;display:none;"></i>');
            },
            oncancel: cancelCallback
        });
        return false;
    };
    $('#c-access-rights-by-app .customize-link').click(openCustomizeDialog);

    // Helper to show given element and fade slowly (default duration is 2 seconds)
    var blinkHint = function(el, duration) {
        $(el).stop().css('opacity', 1).show().animate({
            opacity: 0
        }, duration || 2000, function() {
            $(this).hide();
        });
    };

    // Helper to setup UI colors and everything for one app and save it via AJAX
    var updateApp = function(app, nosave) {
        if(!app) {
            return;
        }
        var tr = $('#c-ar-tr-'+app.id);

        // group access cannot be greater than personal access
        if (app.gaccess > app.access) {
            app.access = app.gaccess;
            tr.find('select').val(app.access);
        }

        if (!app.access) {
            // no access
            tr.find('.c-app-name span').attr('class', 'c-access-color-noaccess');
            tr.find('select').val(0);
            tr.find('.customize-link').hide();
            tr.find('.c-ar-tooltip').hide();
        } else if(app.access == 1) {
            // limited access
            tr.find('.c-app-name span').attr('class', 'c-access-color-limited');
            tr.find('select').val(1);
            // when saving, they're shown later, when customize dialog is open
            if (nosave) {
                tr.find('.customize-link').show();
                tr.find('.c-ar-tooltip').show();
            }
        } else { // app.access > 1
            // Full access
            tr.find('.c-app-name span').attr('class', 'c-access-color-full');
            tr.find('select').val(2);
            tr.find('.customize-link').hide();
            tr.find('.c-ar-tooltip').show();
        }

        if (!nosave) {
            tr.find('.loading').show();
            $('#c-access-rights-wrapper select').attr('disabled', true);
            $.post('<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                app_id: app.id,
                name: 'backend',
                value: app.access
            }, function() {
                $('#c-access-rights-wrapper select').attr('disabled', false);
                tr.find('.loading').hide();
                if (nosave !== 'sneaky') {
                    blinkHint(tr.find('.c-access-saved-hint'));
                }

                // if access rights are set to 'limited', open a customize dialog
                if(app.access == 1) {
                    openCustomizeDialog.call(tr.find('.customize-link'), function() {
                        app.access = app.oldAccess;
                        updateApp(app, 'sneaky');
                    });
                    tr.find('.customize-link').show();
                    tr.find('.c-ar-tooltip').show();
                }
            }, 'json');
        }
    };

    // Global admin status control logic
    var lastToggleValue = arToggle.val();
    var arToggleOnchange = function(nosave) {
        $('#c-access-rights-hint-warning').hide();
        $('#c-access-rights-hint-customize').hide();
        var fullAccess;
        var isUser = 0;
        var newToggleValue = arToggle.val();
        var icon = $('#t-user').find('i.c-access-icon').removeClass('key key-bw delete');
        switch(newToggleValue) {
            case 'remove':
                icon.addClass('key-bw');
                $('#c-credentials-block').hide();
                $('#c-login-block').hide();
                $('#c-password-block').hide();
                if (gNoAccess) {
                    fullAccess = 0;
                    $('#c-access-rights-by-app').hide();
                    $('.c-shown-on-access').hide();
                    break;
                }
                arToggle.val(lastToggleValue || '0');
                $('#c-access-rights-hint-warning').show();
                isUser = 0;
                return;
            case '0':
                icon.addClass('key');
                if (!login && !password) {
                    $('#c-credentials-block').show()
                            .find('.c-login-input').focus().end()
                            .find('.cancel').one('click.access', function() {
                                arToggle.val(lastToggleValue);
                                arToggleOnchange();
                        });
                    return;
                } else {
                    if (login) {
                        fullAccess = 0;
                        $('#c-access-rights-by-app').show();
                        $('.c-shown-on-access').show();
                        isUser = 1;
                        $('#c-login-block').show();
                        $('#c-password-block').show();
                        break;
                    } else {
                        $('#c-login-block').show()
                            .find('.cancel').one('click.access', function() {
                                arToggle.val(lastToggleValue);
                                arToggleOnchange();
                            }).end()
                            .find('.c-tab-toggle:first').click();
                        $('#c-password-block').show();
                        return;
                    }
                }
            case '1':
                icon.addClass('key');
                if (!login && !password) {
                    $('#c-credentials-block').show()
                            .find('.c-login-input').focus().end()
                            .find('.cancel').one('click.access', function() {
                                arToggle.val(lastToggleValue);
                                arToggleOnchange();
                        });
                    return;
                } else {
                    if (login) {
                        fullAccess = 1;
                        $('#c-access-rights-by-app').hide();
                        $('.c-shown-on-access').show();
                        isUser = 1;
                        $('#c-login-block').show();
                        $('#c-password-block').show();
                        break;
                    } else {
                        $('#c-login-block').show()
                            .find('.cancel').one('click.access', function() {
                                arToggle.val(lastToggleValue);
                                arToggleOnchange();
                            }).end()
                            .find('.c-tab-toggle:first').click();
                        $('#c-password-block').show();
                        return;
                    }
                }
            default:
                icon.addClass('key');
                break;
        }

        <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
            if (!accessCheckbox.is(':checked')) {
                fullAccess = 0;
                isUser = -1;
                icon.removeClass('key key-bw delete').addClass('delete');
            }
        <?php }else{ ?>
            $('#c-login-block').show();
            $('#c-password-block').show();
        <?php }?>

        // Reset personal app rights to match group rights
        for(var id in apps) {
            if (newToggleValue != lastToggleValue) {
                apps[id].access = apps[id].gaccess;
            }
            updateApp(apps[id], true);
        }

        lastToggleValue = newToggleValue;

        if (!nosave) {
            var wr = $('#c-access-rights-wrapper');
            wr.children('.loading').show();
            $('#c-access-rights-wrapper select').attr('disabled', true);

            $.post('<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=rights&action=save&id='+$.wa.contactEditor.contact_id, {
                app_id: 'webasyst',
                name: 'backend',
                value: fullAccess ? 1 : 0,
                is_user: isUser
            }, function(r) {
                $('#c-access-rights-wrapper select').attr('disabled', false);
                wr.children('.loading').hide();
                if (gNoAccess && newToggleValue == '0') {
                    $('#c-access-rights-hint-customize').show();
                } else {
                    $('#c-access-rights-hint-warning').hide();
                    blinkHint(wr.children('.c-access-rights-hint.c-access-saved-hint'));
                }
                if (isUser == '-1') {
                    $('#tc-user-access-disabled').show();
                    $('#tc-user-access-disabled').html(r.data.access_disable_msg);
                }
            }, 'json');
        }
    };
    arToggleOnchange(true);
    arToggle.change(function() {
        arToggleOnchange();
    });

    // On select change update app access
    $('#c-access-rights-by-app select').change(function() {
        var self = $(this);
        var app = apps[self.attr('name')];
        var newAccess = parseInt(self.val());

        // personal access cannot be less than group access
        if (app.gaccess > newAccess) {
            self.val(app.access);
            self.parents('tr').find('.loading,.c-access-saved-hint').hide();
            self.parents('tr').find('.c-access-not-allowed-hint').show();
            return;
        }
        self.parents('tr').find('.c-access-not-allowed-hint').hide();
        app.oldAccess = app.access;
        app.access = newAccess;
        updateApp(app);
    });

    // Tooltips on info icons
    $('#c-access-rights-wrapper .c-ar-tooltip').tooltip({
        bodyHandler: function() {
            return $(this).parent().find('.c-ar-tooltip-html').html();
        },
        extraClass: "tooltip",
        noHideOnClick: true,
        showURL: false
    });

});
</script>

<?php }?><?php }} ?>