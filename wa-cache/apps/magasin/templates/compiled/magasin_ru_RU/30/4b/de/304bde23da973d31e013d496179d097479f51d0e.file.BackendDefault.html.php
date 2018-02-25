<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 10:14:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/backend/BackendDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:13152059295a8bf514d69e18-80123589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '304bde23da973d31e013d496179d097479f51d0e' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/backend/BackendDefault.html',
      1 => 1519121640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13152059295a8bf514d69e18-80123589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'wa_app' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8bf5150c41d4_81828800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8bf5150c41d4_81828800')) {function content_5a8bf5150c41d4_81828800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_header')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/function.wa_header.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 - <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" media="screen" />

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

</head>
<body>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
"><div id="wa">
    <?php echo smarty_function_wa_header(array(),$_smarty_tpl);?>

    <div id="wa-app">
        <div class="sidebar left200px" id="c-sidebar"></div>
        <div class="content left200px" id="c-core">
            <div class="contacts-background">
                <div class="block not-padded c-core-content">
                    <?php if (isset($_smarty_tpl->tpl_vars['content']->value)&&$_smarty_tpl->tpl_vars['content']->value){?>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    <?php }else{ ?>
                    <div class="block">
                        <h1 class="wa-page-heading">Загрузка...</h1>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div id="wa-cache" style="display:none"></div>
</div>
</body>
</html><?php }} ?>