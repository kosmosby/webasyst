<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:16
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/featured/Featured.html" */ ?>
<?php /*%%SmartyHeaderCode:20196181065a7f4ed8c922c5-05633280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f40f10f0247e89cd289130eceb5be8b1814e072' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/featured/Featured.html',
      1 => 1452774829,
      2 => 'file',
    ),
    'a9f8ee7836b1799eca9cc96a7fb5519d3aba3d72' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/message.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '5e63e29680f48dfbf91f65113f77db7075bb7794' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.include.html',
      1 => 1477491284,
      2 => 'file',
    ),
    '83eeb7855b3f98bfc1a5951cd7e3b217ed84ab38' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '4464666c3249303f1d901c4804e262f3e64a9481' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/plugins/Plugins.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
    'f5038f45b95be568e0d3977a1dfd0bd9c5eef454' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/widgets/Widgets.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20196181065a7f4ed8c922c5-05633280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_name' => 0,
    'promos' => 0,
    'promo' => 0,
    'promo_url' => 0,
    'featured_apps' => 0,
    'apps' => 0,
    'app' => 0,
    'theme' => 0,
    'themes_meet' => 0,
    'plugins_app' => 0,
    'plugin' => 0,
    'plugins_meet' => 0,
    'widget' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f4ed95ab176_25085329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f4ed95ab176_25085329')) {function content_5a7f4ed95ab176_25085329($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?><?php /*  Call merged included template "../../includes/message.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20196181065a7f4ed8c922c5-05633280');
content_5a7f4ed8ce57a5_13811961($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/message.html" */?>
<div class="block">
<?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><h1><?php echo htmlspecialchars(sprintf('Приложения %s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</h1><br><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['promos']->value)){?>

        <section class="i-promos-wrapper">
            <div class="i-promos-slider" id="i-promos-slider">
                <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['promo_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['promo']->value['link'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['promo_url'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['promo_url']->value,'@^.*\.webasyst\.\w{2,3}/store/app/([^/]+)/$@','#/apps/$1/'), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['promo_url'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['promo_url']->value,'@^.*\.webasyst\.\w{2,3}/store/themes/([^/]+)/$@','#/themes/$1/'), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['promo_url'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['promo_url']->value,'@^.*\.webasyst\.\w{2,3}/store/plugins/([^/]+)/([^/]+)/$@','#/plugins/$1/$2/'), null, 0);?>
                    <div class="i-promos-slide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');">
                        <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h3 class="i-slide-header" style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['promo']->value['title'];?>
</h3><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['body'])){?><p class="i-slide-text" style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['promo']->value['body'];?>
</p><?php }?>
                        <a class="i-slide-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['promo_url']->value,'#')!==0){?> target="_blank"<?php }?>></a>
                    </div>
                <?php } ?>
            </div>

            <?php if ((count($_smarty_tpl->tpl_vars['promos']->value)>1)){?>
                <script>( function($) {
                    $(window).one("wa_focus_list", function() {
                        $("#i-promos-slider").bxSlider({
                            mode: "fade",
                            auto : true,
                            pause : 7000,
                            autoHover : true,
                            pager: true
                        });
                    });
                })(jQuery);</script>
            <?php }?>
        </section>

</div>
<?php }?>

<section class="i-section-wrapper block double-padded i-apps" style="padding-top: 10px;">
    <header class="i-header-wrapper">
        <h2 class="i-header heading">Рекомендуемые приложения</h2>
        <div class="i-controls-wrapper">
            <a href="#/apps/" class="i-controls-viewall">Смотреть все</a>
            <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
            <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
        </div>
    </header>
    <div class="i-section-block">
        <ul class="i-list-wrapper thumbs i-mini">
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['_app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['featured_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                <li class="i-item-wrapper">
                    <?php /*  Call merged included template "../apps/Apps.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../apps/Apps.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('is_mini'=>true,'hide_product_badge'=>true), 0, '20196181065a7f4ed8c922c5-05633280');
content_5a7f4ed8e024a1_77011998($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../apps/Apps.include.html" */?>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php $_smarty_tpl->tpl_vars['themes_meet'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('themes', null, null); ob_start(); ?>
<section class="i-section-wrapper block double-padded i-themes" style="background: transparent;">
    <header class="i-header-wrapper">
        <h2 class="i-header heading">Рекомендуемые темы дизайна</h2>
        <div class="i-controls-wrapper">
            <a href="#/themes/" class="i-controls-viewall">Смотреть все</a>
            <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
            <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
        </div>
    </header>
    <div class="i-section-block" id="featured-themes-list">
        <ul class="i-list-wrapper thumbs js-list-items">
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['themes'])){?>
                    <?php $_smarty_tpl->tpl_vars['themes_meet'] = new Smarty_variable(true, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['theme_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['theme_id']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
                        <li class="i-item-wrapper <?php if ($_smarty_tpl->tpl_vars['theme']->value['installed']){?>i-installed<?php }?>" data-sort="-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme']->value['sort'])===null||$tmp==='' ? 1000 : $tmp);?>
">
                            <?php /*  Call merged included template "../themes/Themes.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../themes/Themes.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_product_badge'=>true), 0, '20196181065a7f4ed8c922c5-05633280');
content_5a7f4ed9120358_05353662($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../themes/Themes.include.html" */?>
                        </li>
                    <?php } ?>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['themes_meet']->value){?><?php echo Smarty::$_smarty_vars['capture']['themes'];?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['plugins_meet'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('plugins', null, null); ob_start(); ?>
<section class="i-section-wrapper block double-padded i-plugins">
    <header class="i-header-wrapper">
        <h2 class="i-header heading">Рекомендуемые плагины</h2>
        <div class="i-controls-wrapper">
            <a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['plugins_app']->value;?>
/" class="i-controls-viewall">Смотреть все</a>
            <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
            <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
        </div>
    </header>
    <div class="i-section-block">
        <ul class="i-list-wrapper thumbs js-list-items">
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['plugins'])){?>
                    <?php $_smarty_tpl->tpl_vars['plugins_meet'] = new Smarty_variable(true, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                        <li class="i-item-wrapper" data-sort="-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['sort'])===null||$tmp==='' ? 1000 : $tmp);?>
">
                            <?php /*  Call merged included template "../plugins/Plugins.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../plugins/Plugins.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_product_badge'=>true), 0, '20196181065a7f4ed8c922c5-05633280');
content_5a7f4ed924ae21_64609284($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../plugins/Plugins.include.html" */?>
                        </li>
                    <?php } ?>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['plugins_meet']->value){?><?php echo Smarty::$_smarty_vars['capture']['plugins'];?>
<?php }?>

<section class="i-section-wrapper block double-padded i-widgets">
    <header class="i-header-wrapper">
        <h2 class="i-header heading">Рекомендуемые виджеты</h2>
        <div class="i-controls-wrapper">
            <a href="#/widgets/" class="i-controls-viewall">Смотреть все</a>
            <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
            <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
        </div>
    </header>
    <div class="i-section-block">
        <ul class="i-list-wrapper thumbs js-list-items">
            <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['widgets'])){?>
                    <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_smarty_tpl->tpl_vars['widget_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget_id']->value = $_smarty_tpl->tpl_vars['widget']->key;
?>
                        <li class="i-item-wrapper <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['installed'])){?>i-installed<?php }?>" data-sort="-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['widget']->value['sort'])===null||$tmp==='' ? 1000 : $tmp);?>
">
                            <?php /*  Call merged included template "../widgets/Widgets.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../widgets/Widgets.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_product_badge'=>true), 0, '20196181065a7f4ed8c922c5-05633280');
content_5a7f4ed93cf4e6_32274661($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../widgets/Widgets.include.html" */?>
                        </li>
                    <?php } ?>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</section>

</div>

<script>
( function($, SectionSlider) {

    var initSectionSlider = function() {
        var $section = $(".i-section-wrapper");

        if ($section.length) {
            $section.each( function() {
                new SectionSlider({ $wrapper: $(this) });
            });
        }
    };

    $(window).one("wa_focus_list", function() {
        initSectionSlider();
    });

    $.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Рекомендуем").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

})(jQuery, SectionSlider);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:16
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/message.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4ed8ce57a5_13811961')) {function content_5a7f4ed8ce57a5_13811961($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
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
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
    <?php } ?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:16
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4ed8e024a1_77011998')) {function content_5a7f4ed8e024a1_77011998($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="i-app-item <?php if (empty($_smarty_tpl->tpl_vars['is_mini']->value)){?>profile image96px<?php }else{ ?>is-mini<?php }?>">
    <div class="image">
        <a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/">
            <div class="i-image-wrapper">
                <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][96];?>
" alt="<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
" height="96" width="96">
                <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['app']->value['publish_datetime'])>time()-86400*14){?>
                    <!-- NEW -->
                    <div class="i-badge new"><span>New</span></div>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['app']->value['tags'])){?>
                    <?php if (in_array('featured',$_smarty_tpl->tpl_vars['app']->value['tags'])){?>
                        <!-- FEATURED -->
                        <div class="i-badge featured"><i class="thumb-up"></i></div>
                    <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['app']->value['tags'])){?>
                        <!-- UPDATED -->
                        <div class="i-badge updated two-lines"><span>Новая версия</span></div>
                    <?php }?>
                <?php }?>
                <?php }?>
            </div>
        </a>
    </div>
    <div class="details">
        <h5><a href="#/apps/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/"
               data-href="#/apps%filter%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>.<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>/"
               class="js-item-link"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['app']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
        <?php if ($_smarty_tpl->tpl_vars['app']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['app']->value['description'];?>
</p><?php }?>

        <?php if (empty($_smarty_tpl->tpl_vars['app']->value['installed'])){?>

            

            <?php if (empty($_smarty_tpl->tpl_vars['app']->value['price'])){?>
                <strong>Бесплатно</strong>
            <?php }else{ ?>
                <div class="i-pricing">
                <?php if (isset($_smarty_tpl->tpl_vars['app']->value['lease_price'])&&(($_smarty_tpl->tpl_vars['app']->value['lease_price']=='free')||(empty($_smarty_tpl->tpl_vars['app']->value['lease_price'])))){?>
                    
                    <?php ob_start();?><?php echo floatval(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['app']->value['price'],'@\D+@',''));?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['app']->value['price']&&($_tmp1>0)){?>
                        <strike><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strike>&nbsp;<strong title="<?php echo sprintf('Статус вашего аккаунта позволяет установить «%s» бесплатно!',htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
">Бесплатно</strong>
                    <?php }else{ ?>
                        <strong>Бесплатно</strong>
                    <?php }?>
                <?php }else{ ?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?><strike class="bold gray"><?php echo $_smarty_tpl->tpl_vars['app']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                    <strong<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?> class="discounted"<?php }?>><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['lease_price'])){?>
                        или
                        <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['app']->value['lease_price']);?>
</strong>
                    <?php }?>
                <?php }?>
                </div>
            <?php }?>

        <?php }else{ ?>

            

            <?php if ($_smarty_tpl->tpl_vars['app']->value['commercial']){?>
                
                <?php if (empty($_smarty_tpl->tpl_vars['app']->value['purchased'])){?>
                    
                    <em class="i-installed-label not-licensed<?php if (installerHelper::overdue()){?> overdue<?php }?>"><i
                                class="icon10 <?php if (installerHelper::overdue()){?>no<?php }else{ ?>no-bw<?php }?>"></i> Нет лицензии</em>
                <?php }else{ ?>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_expire'])){?>
                        <?php if ((strtotime($_smarty_tpl->tpl_vars['app']->value['license_expire'])<time())){?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(0, null, 0);?><?php }?>
                        <em class="i-installed-label<?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?> overdue<?php }?>"><i
                                    class="icon10 <?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?>no<?php }else{ ?>yes<?php }?>"></i> <?php echo sprintf('Арендовано до %s',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['app']->value['license_expire'],'humandate'));?>

                        </em>
                    <?php }else{ ?>
                        <em class="i-installed-label licensed"><i class="icon10 yes"></i> Лицензия</em>
                    <?php }?>
                <?php }?>
            <?php }else{ ?>
                
                <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
            <?php }?>

        <?php }?>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:17
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4ed9120358_05353662')) {function content_5a7f4ed9120358_05353662($_smarty_tpl) {?><a href="#/themes/<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
/" data-href="#/themes%query%%filter%/<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
/" class="js-item-link">
    <!-- cover -->
    <div class="i-paper">
        <div class="i-lifted-corners">
            <img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['icon'];?>
">
        </div>
        <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['theme']->value['publish_datetime'])>time()-86400*14){?>
            <!-- NEW -->
            <div class="i-badge new"><span>New</span></div>
        <?php }elseif(!empty($_smarty_tpl->tpl_vars['theme']->value['tags'])){?>
            <?php if (in_array('featured',$_smarty_tpl->tpl_vars['theme']->value['tags'])){?>
                <!-- FEATURED -->
                <div class="i-badge featured"><i class="thumb-up"></i></div>
            <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['theme']->value['tags'])){?>
                <!-- UPDATED -->
                <div class="i-badge updated two-lines"><span>Новая версия</span></div>
            <?php }?>
        <?php }?>
        <?php }?>
    </div>

    <!-- name & author -->
    <h5><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['theme']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h5>

    <!-- theme price and status -->
    <?php if (!$_smarty_tpl->tpl_vars['theme']->value['installed']){?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value['commercial']){?>
            <?php if (ifset($_smarty_tpl->tpl_vars['theme']->value['lease_price'])=='free'){?>
                
                <span class="black">Бесплатно</span>
            <?php }else{ ?>
                <div class="i-pricing">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['compare_price'])){?>
                    <strike class="gray"><?php echo $_smarty_tpl->tpl_vars['theme']->value['compare_price'];?>
</strike>&nbsp;
                    <strong class="discounted"><?php echo $_smarty_tpl->tpl_vars['theme']->value['price'];?>
</strong>
                <?php }else{ ?>
                    <span class="gray">
                        <?php echo $_smarty_tpl->tpl_vars['theme']->value['price'];?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['lease_price'])){?>
                            или <?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['theme']->value['lease_price']);?>

                        <?php }?>
                    </span>
                <?php }?>
                </div>
            <?php }?>
        <?php }else{ ?>
            <span class="gray">Бесплатно</span>
        <?php }?>
    <?php }else{ ?>
        <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
    <?php }?>
</a>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:17
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/plugins/Plugins.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4ed924ae21_64609284')) {function content_5a7f4ed924ae21_64609284($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['app'] = new Smarty_variable($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
<a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" data-href="#/plugins%filter%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" class="js-item-link">
  <div class="i-image-wrapper">
    <!-- cover -->
    <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['icon'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/installer/img/dummy-plugin.png" : $tmp);?>
">

    <!-- name & author -->
    <h5><?php echo smarty_modifier_truncate(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['plugin_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true),29);?>
</h5>

    <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime'])>time()-86400*14){?>
      <!-- NEW -->
      <div class="i-badge new"><span>New</span></div>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
      <?php if (in_array('featured',$_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
        <!-- FEATURED -->
        <div class="i-badge featured"><i class="thumb-up"></i></div>
      <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
        <!-- UPDATED -->
        <div class="i-badge updated two-lines"><span>Новая версия</span></div>
      <?php }?>
    <?php }?>
    <?php }?>

  </div>
</a>

<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['description'])){?>
  <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</p>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])&&!empty($_smarty_tpl->tpl_vars['plugin']->value['installed']['description'])){?>
  <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['installed']['description'];?>
</p>
<?php }?>

<!-- plugin price and status -->
<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
  <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['commercial'])){?>
    <?php if (ifset($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])=='free'){?>
      
      <span class="black bold">Бесплатно</span>
    <?php }else{ ?>
      <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['compare_price'])){?>
        <strike class="gray"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['compare_price'];?>
</strike>&nbsp;
        <strong class="discounted black"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>
</strong>
      <?php }else{ ?>
        <span class="black bold">
                                <?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>

          <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])){?>
            или <?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['plugin']->value['lease_price']);?>

          <?php }?>
                            </span>
      <?php }?>
    <?php }?>
  <?php }else{ ?>
    <span class="black bold">Бесплатно</span>
  <?php }?>
<?php }else{ ?>
  <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 19:58:17
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/widgets/Widgets.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f4ed93cf4e6_32274661')) {function content_5a7f4ed93cf4e6_32274661($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="profile image96px">
    <div class="image">
        <a href="#/widgets/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" data-href="#/widgets%query%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" class="js-item-link">
            <div class="i-image-wrapper">
                <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['widget']->value['icon'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/installer/img/dummy-widget.png" : $tmp);?>
" alt="<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['widget']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['widget']->value['publish_datetime'])>time()-86400*14){?>
                    <!-- NEW -->
                    <div class="i-badge new"><span>New</span></div>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                    <?php if (in_array('featured',$_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                        <!-- FEATURED -->
                        <div class="i-badge featured"><i class="thumb-up"></i></div>
                    <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                        <!-- UPDATED -->
                        <div class="i-badge updated two-lines"><span>Новая версия</span></div>
                    <?php }?>
                <?php }?>
                <?php }?>
            </div>
        </a>
    </div>
    <div class="details">
        <h5><a href="#/widgets/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" data-href="#/widgets%query%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" class="js-item-link"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['widget']->value['name'],32), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
        <?php if ($_smarty_tpl->tpl_vars['widget']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</p><?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['installed'])){?>

            

            <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['price'])){?>
                <strong>Бесплатно</strong>
            <?php }else{ ?>
                <?php if (ifempty($_smarty_tpl->tpl_vars['widget']->value['lease_price'])=='free'){?>
                    
                    <strong>Бесплатно</strong>
                <?php }else{ ?>
                    <div class="i-pricing">
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['compare_price'])){?><strike class="bold gray"><?php echo $_smarty_tpl->tpl_vars['widget']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                    <strong<?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['compare_price'])){?> class="discounted"<?php }?>><?php echo $_smarty_tpl->tpl_vars['widget']->value['price'];?>
</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['lease_price'])){?>
                        или <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['widget']->value['lease_price']);?>
</strong>
                    <?php }?>
                    </div>
                <?php }?>
            <?php }?>

        <?php }else{ ?>

            

            <?php if ($_smarty_tpl->tpl_vars['widget']->value['commercial']){?>
                
                <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['purchased'])){?>
                    
                    <em class="i-installed-label not-licensed<?php if (installerHelper::overdue()){?> overdue<?php }?>"><i class="icon10 <?php if (installerHelper::overdue()){?>no<?php }else{ ?>no-bw<?php }?>"></i> Нет лицензии</em>
                <?php }else{ ?>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['license_expire'])){?>
                        <?php if ((strtotime($_smarty_tpl->tpl_vars['widget']->value['license_expire'])<time())){?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(0, null, 0);?><?php }?>
                        <em class="i-installed-label<?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?> overdue<?php }?>"><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?>no<?php }else{ ?>yes<?php }?>"></i> <?php echo sprintf('Арендовано до %s',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['widget']->value['license_expire'],'humandate'));?>
</em>
                    <?php }else{ ?>
                        <em class="i-installed-label licensed"><i class="icon10 yes"></i> Лицензия</em>
                    <?php }?>
                <?php }?>
            <?php }else{ ?>
                
                <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
            <?php }?>

        <?php }?>
    </div>
</div>
<?php }} ?>