<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:49:19
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/Welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:20045469205a7f4cbf7c4553-04203562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc7b4b83e4f43df04f4d34dff2fd79000193f1b' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/team/templates/actions/Welcome.html',
      1 => 1480510050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20045469205a7f4cbf7c4553-04203562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    '_invite_template' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4cbf849f08_55678173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4cbf849f08_55678173')) {function content_5a7f4cbf849f08_55678173($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet"><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js"></script><?php $_smarty_tpl->_capture_stack[0][] = array('default', '_invite_template', null); ob_start(); ?><div class="t-invite-item"><input class="t-field" type="text" name="email" value="" placeholder="Email"><span class="t-notice">Минимальный доступ</span><input type="checkbox" name="access" value="" placeholder="Доступ"><span class="t-notice">Полный доступ</span><a class="t-remove inline-link js-remove-invite" href="javascript:void(0);"><i class="icon16 delete"></i><b><i>Удалить</i></b></a></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="t-welcome-page" id="t-welcome-page"><div class="t-content-body"><h1>Добро пожаловать в команду!</h1><p>Webasyst — это удобная среда для коллективной работы и обмена рабочей информацией через интернет. Введите email-адреса своих коллег, и Webasyst автоматически создаст для них аккаунты пользователей и отправит им приглашения для входа.</p><div class="t-invite-wrapper" id="t-invite-wrapper" style="margin-top: 2em;"><ul class="t-invite-list"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><li><?php echo $_smarty_tpl->tpl_vars['_invite_template']->value;?>
</li><?php }} ?></ul><div class="t-invite-template" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['_invite_template']->value;?>
</div><div class="t-actions"><a class="t-add-invite inline-link js-add-invite" href="javascript:void(0);"><i class="icon16 add"></i><b><i>Добавить больше сотрудников</i></b></a></div></div></div><footer class="t-footer-wrapper"><input class="button blue js-send-invites" type="submit" value="Отправить приглашения"><span style="margin: 0 4px;">или</span><a class="js-skip-page" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">добавить участников позже</a><p class="gray"><em>Полный доступ</em> — это возможность пользоваться без ограничения всеми функциями всех установленных приложений. <em>Минимальный доступ</em> — этот уровень доступа позволяет лишь просматривать и редактировать собственный профиль в приложении «Команда». Позже вы сможете более гибко настроить доступ для каждого сотрудника к отдельным приложениям.</p></footer><script>( function($) {new WelcomePage({$wrapper: $("#t-welcome-page"),locales: {incorrect: "Неверный email-адрес"}});})(jQuery);</script></div>
<?php }} ?>