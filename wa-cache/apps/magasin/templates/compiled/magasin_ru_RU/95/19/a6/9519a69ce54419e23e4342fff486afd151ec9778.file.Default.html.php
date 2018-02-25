<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 10:30:46
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/layouts/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:7085984715a8bf83f0ba974-92988218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9519a69ce54419e23e4342fff486afd151ec9778' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/layouts/Default.html',
      1 => 1519122645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7085984715a8bf83f0ba974-92988218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8bf83fad8367_51600952',
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'wa_app' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8bf83fad8367_51600952')) {function content_5a8bf83fad8367_51600952($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_header')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/function.wa_header.php';
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-imageareaselect/imgareaselect-default.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" />
<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" media="screen" />


<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />


<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="?action=loc&v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js"></script>


</head>
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