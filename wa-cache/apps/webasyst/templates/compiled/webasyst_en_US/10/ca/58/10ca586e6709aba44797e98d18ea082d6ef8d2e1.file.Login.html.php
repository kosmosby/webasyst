<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 20:11:57
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-system/webasyst/templates/actions/login/Login.html" */ ?>
<?php /*%%SmartyHeaderCode:13801018085a7f520d7f64b9-72727286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ca586e6709aba44797e98d18ea082d6ef8d2e1' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-system/webasyst/templates/actions/login/Login.html',
      1 => 1513257588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13801018085a7f520d7f64b9-72727286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_style' => 0,
    'title' => 0,
    'error' => 0,
    'options' => 0,
    'login' => 0,
    'password' => 0,
    'remember' => 0,
    'wa' => 0,
    'back_on_cancel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f520d95da66_70089709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f520d95da66_70089709')) {function content_5a7f520d95da66_70089709($_smarty_tpl) {?><form method="post" action="">
<input type="hidden" name="wa_auth_login" value="1" />
<h1<?php if (!empty($_smarty_tpl->tpl_vars['title_style']->value)){?> style="<?php echo $_smarty_tpl->tpl_vars['title_style']->value;?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
<div id="wa-login-error" class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['options']->value['description'])){?>
<div class="wa-login-description"><span><?php echo _ws($_smarty_tpl->tpl_vars['options']->value['description']);?>
</span></div>
<?php }else{ ?>
<div id="wa-login-error" class="error"></div>
<?php }?>
<div class="fields form">
    <div class="field">
        <div class="name">
        <?php if ($_smarty_tpl->tpl_vars['options']->value['login']=='email'){?>Email<?php }else{ ?>Login<?php }?>:
        </div>
        <div class="value">
            <input type="text" class="wa-login-text-input" id="wa-login-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="login" placeholder="<?php if ($_smarty_tpl->tpl_vars['options']->value['login']=='email'){?>Email<?php }else{ ?>Email or login name<?php }?>" />
        </div>
    </div>
    <div class="field">
        <div class="name">
            Password:
        </div>
        <div class="value">
            <input type="password" class="wa-login-text-input" name="password" value="<?php if (!empty($_smarty_tpl->tpl_vars['password']->value)){?><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
<?php }?>" placeholder="Password" />
            <?php if ($_smarty_tpl->tpl_vars['options']->value['remember_enabled']){?>
            <div class="wa-remember-me">
                <input id="remember-me" name="remember" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['remember']->value)||$_smarty_tpl->tpl_vars['wa']->value->post('remember')){?>checked="checked" <?php }?> value="1" /> <label for="remember-me">Remember me</label>
            </div>
            <?php }else{ ?>
            <br><br>
            <?php }?>
        </div>
    </div>
    <div class="field">
        <div class="value submit">
            <input type="submit" value="Sign in" class="button wa-login-submit" id="wa-login-submit">
            <?php if ((!empty($_smarty_tpl->tpl_vars['back_on_cancel']->value))){?>
                or
                <a class="wa-logincancel" href="<?php echo $_smarty_tpl->tpl_vars['back_on_cancel']->value;?>
">cancel</a>
            <?php }?>
            <a href="?forgotpassword" class="wa-forgotpassword underline">Forgot password?</a>
        </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

</div>
</form>
<script type="text/javascript">
$(function() {
    // When user clicks "forgot password" link, send email (if already typed in)
    // to show on the next form by default.
    $('.wa-forgotpassword').click(function() {
        var val = $('#wa-login-input').val();
        if (!val) {
            return true;
        }
        var form = $('<form action="'+$(this).attr('href')+'" method="POST">'+
                        '<input type="hidden" name="ignore" value="1">'+
                        '<input type="hidden" name="login" value="">'+
                     '</form>');
        form.find('[name="login"]').val(val);
        form.appendTo('body');
        form.submit();
        return false;
    });

    // Update csrf token right before submit
    // in case it changed via another browser tab
    var $csrf_hidden_field = $('[name="_csrf"]');
    $csrf_hidden_field.closest('form').submit(function() {
        $csrf_hidden_field.val(getCsrfToken());
    });

    function getCsrfToken() {
        var matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)"));
        if (!matches || !matches[1]) {
            return '';
        }
        return decodeURIComponent(matches[1]);
    }
});
</script><?php }} ?>