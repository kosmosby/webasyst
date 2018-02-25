<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:06:03
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/main.html" */ ?>
<?php /*%%SmartyHeaderCode:19372425455a7ea7ebdc3761-17510222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '297aaa9c6abdf5f6845714c2efe749c6d89f0a4c' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/site/themes/default/main.html',
      1 => 1509612858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19372425455a7ea7ebdc3761-17510222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
    'action' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7ebe67275_01076583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7ebe67275_01076583')) {function content_5a7ea7ebe67275_01076583($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&(empty($_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['page']->value['content']))){?>

    <div class="welcome">
        <h1>Добро пожаловать на ваш новый сайт!</h1>
        <p><?php echo sprintf('Начните с <a href="%s">создания страницы</a> в бекенде сайта.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
    </div>

<?php }else{ ?>

    <article class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 
    </article>

    <?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&(empty($_smarty_tpl->tpl_vars['action']->value)||$_smarty_tpl->tpl_vars['action']->value=='page')){?>
        <div class="content">

            <!-- FOLLOW -->
            <aside class="connect inline">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

                    </div>
                <?php }?>
                
            </aside>

        </div>
    <?php }?>

<?php }?><?php }} ?>