<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:13
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/layouts/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:17982206185a7f4ed5af07a2-88209492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a47f4a3e401971124cabe1a9339275f9f555db0' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/layouts/Backend.html',
      1 => 1481728233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17982206185a7f4ed5af07a2-88209492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'no_ajax' => 0,
    'wa_url' => 0,
    'default_query' => 0,
    'module' => 0,
    'update_counter' => 0,
    'messages' => 0,
    'message' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4ed5c8d473_57296942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4ed5c8d473_57296942')) {function content_5a7f4ed5c8d473_57296942($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><!DOCTYPE html><html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
 — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/installer.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    
    <?php if (empty($_smarty_tpl->tpl_vars['no_ajax']->value)){?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/plugins/bxslider/jquery.bxslider.css">
    <?php }?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/installer-jquery.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/installer-jquery.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/installer-jquery.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




    <?php if (empty($_smarty_tpl->tpl_vars['no_ajax']->value)){?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/plugins/bxslider/jquery.bxslider.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/layout.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

    
    <?php if (empty($_smarty_tpl->tpl_vars['no_ajax']->value)){?>
    <script type="text/javascript">
        $.layout.init({
            debug: <?php echo var_export(waSystemConfig::isDebug(),true);?>
,
            default_query:<?php echo json_encode($_smarty_tpl->tpl_vars['default_query']->value);?>

        });
    </script>
    <?php }?>
</head>

<body>
    <div id="wa">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


        <div id="wa-app">

            <!-- NAV SIDEBAR -->
            <?php if (1){?>
                <div class="sidebar left200px">
                  <div class="i-sidebar">
                    <div class="block">
                      <ul class="menu-v with-icons">
                          <li>
                              <a href="./#/featured/">
                                  <i class="icon16 star"></i>Рекомендуем
                              </a>
                          </li>
                          <li class="top-padded">
                              <a href="./#/apps/">
                                  <i class="icon16 apps"></i>Приложения
                              </a>
                          </li>
                          <li>
                              <a href="./#/themes/">
                                  <i class="icon16 palette"></i>Темы дизайна
                              </a>
                          </li>
                          <li>
                              <a href="./#/plugins/<?php echo $_smarty_tpl->tpl_vars['default_query']->value['plugins'];?>
/">
                                  <i class="icon16 plugins"></i>Плагины
                              </a>
                          </li>
                          <li>
                              <a href="./#/widgets/">
                                  <i class="icon16 widgets"></i>Виджеты
                              </a>
                          </li>
                      </ul>
                    </div>

                    

                    

                    <div class="hr"></div>

                    <div class="block">
                      <ul class="menu-v with-icons">
                        <li>
                          <a href="./#/assets/">
                              <i class="icon16 checkboxes"></i>Установлено
                          </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['module']->value=='update'){?> class="selected"<?php }?>>
                            <?php if (isset($_smarty_tpl->tpl_vars['update_counter']->value)&&$_smarty_tpl->tpl_vars['update_counter']->value){?><span class="count indicator red"><?php echo $_smarty_tpl->tpl_vars['update_counter']->value;?>
</span><?php }?>
                            <a href="?module=update">
                                <i class="icon16 update"></i>Обновления
                            <?php if ($_smarty_tpl->tpl_vars['module']->value=='update'){?>
                                <i id="menu-item-selected-state-icon" style="margin-left: 0;"></i>
                            <?php }?>
                            </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['module']->value=='settings'){?> class="selected"<?php }?>>
                            <a href="?module=settings">
                                <i class="icon16 settings"></i>Настройки
                            </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            <?php }?>

            <!-- CONTENT -->
            <div class="content<?php if (1){?> left200px<?php }?>" id="i-list">
                <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?><i class="icon16 yes"></i>
                    <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                    <i class="icon16 no"></i>
                    <?php }?>
                    <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true));?>

                </div>
                <?php } ?>
                <?php }?>
                <?php if (empty($_smarty_tpl->tpl_vars['no_ajax']->value)){?>
                <div class="block triple-padded">
                    <i class="icon16 loading"></i>
                </div>
                <?php }?>


                
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                

            </div>

        </div><!-- #wa-app -->

    </div><!-- #wa -->

</body>

</html>
<?php }} ?>