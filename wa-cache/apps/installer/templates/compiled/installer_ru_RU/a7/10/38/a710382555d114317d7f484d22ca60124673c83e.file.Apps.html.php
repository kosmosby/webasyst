<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 20:14:10
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.html" */ ?>
<?php /*%%SmartyHeaderCode:17682672005a7f52921f4f84-14255614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a710382555d114317d7f484d22ca60124673c83e' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.html',
      1 => 1456921565,
      2 => 'file',
    ),
    '5e63e29680f48dfbf91f65113f77db7075bb7794' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.include.html',
      1 => 1477491284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17682672005a7f52921f4f84-14255614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'vendor_name' => 0,
    'apps' => 0,
    'app' => 0,
    '_new_apps' => 0,
    '_sort' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f5292624a72_61272322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f5292624a72_61272322')) {function content_5a7f5292624a72_61272322($_smarty_tpl) {?><div class="block" id="list-apps">

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

    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><h1><?php echo htmlspecialchars(sprintf('Приложения %s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</h1><br><?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)){?>

        <?php if (empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?>
        <section class="i-section-wrapper block double-padded highlighted">
            <header class="i-header-wrapper">
                <h2 class="i-header heading">Рекомендуем</h2>
                <div class="i-controls-wrapper">
                    <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
                    <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
                </div>
            </header>
            <div class="i-section-block">
                <ul class="i-list-wrapper thumbs i-mini">
                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['_app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['tags'])&&in_array("featured",$_smarty_tpl->tpl_vars['app']->value['tags'])){?>
                            <li class="i-item-wrapper">
                                <?php /*  Call merged included template "./Apps.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Apps.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_product_badge'=>true,'is_mini'=>true), 0, '17682672005a7f52921f4f84-14255614');
content_5a7f529234e914_08035032($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Apps.include.html" */?>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </section>

        <section class="i-section-wrapper block double-padded">
            <header class="i-header-wrapper">
                <h2 class="i-header heading">Лучшие новые приложения</h2>
                <div class="i-controls-wrapper">
                    <a class="i-controls-link show-before-item" href="javascript:void(0);"></a>
                    <a class="i-controls-link show-next-item" href="javascript:void(0);"></a>
                </div>
            </header>
            <div class="i-section-block">
                <ul class="i-list-wrapper thumbs i-mini">
                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['_app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_new_apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <li class="i-item-wrapper">
                            <?php /*  Call merged included template "./Apps.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Apps.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hide_product_badge'=>true,'is_mini'=>true), 0, '17682672005a7f52921f4f84-14255614');
content_5a7f529234e914_08035032($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Apps.include.html" */?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <?php }?>

        <div class="block double-padded">

            <!-- price|updated -->
            <?php if (empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?>
            <div class="float-right js-filters">
                <ul class="menu-h i-filter-price js-filter" data-filter="commercial|sort">
                    <li class="selected"><a href="#/apps/" data-href="#/apps%filter%/%query%/" class="inline-link"><b><i>Все</i></b></a></li>
                    <li><a href="#/apps&commercial=true/" data-href="#/apps&commercial=true%filter%/%query%/" class="inline-link"><b><i>Платные</i></b></a></li>
                    <li><a href="#/apps&commercial=false/" data-href="#/apps&commercial=false%filter%/%query%/" class="inline-link"><b><i>Бесплатно</i></b></a></li>
                    <li><a href="#/apps&sort=new/" data-href="#/apps&sort=new%filter%/%query%/" class="inline-link"><b><i>Новые</i></b></a></li>
                </ul>
            </div>
            <h2 class="heading">Лидеры продаж и скачиваний</h2>
            <br><br>
            <?php }?>

            <ul class="thumbs js-list-items">
                <?php $_smarty_tpl->tpl_vars['_sort'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['_app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <li
                                data-sort="-<?php echo $_smarty_tpl->tpl_vars['_sort']->value++;?>
"
                                data-sort-new="<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['publish_datetime'])){?><?php echo strtotime($_smarty_tpl->tpl_vars['app']->value['publish_datetime']);?>
<?php }else{ ?>0<?php }?>"
                                data-filter-commercial="<?php if (empty($_smarty_tpl->tpl_vars['app']->value['commercial'])){?>false<?php }else{ ?>true<?php }?>"
                                data-hide="<?php if (in_array('dislike',$_smarty_tpl->tpl_vars['app']->value['tags'])||in_array('unlisted',$_smarty_tpl->tpl_vars['app']->value['tags'])){?>true<?php }else{ ?>false<?php }?>"
                        >
                            <?php /*  Call merged included template "./Apps.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Apps.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17682672005a7f52921f4f84-14255614');
content_5a7f529234e914_08035032($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Apps.include.html" */?>
                        </li>
                <?php } ?>

            </ul>
        </div>

    <?php }?>

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
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Приложения").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

})(jQuery, SectionSlider);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 20:14:10
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/Apps.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f529234e914_08035032')) {function content_5a7f529234e914_08035032($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
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
<?php }} ?>