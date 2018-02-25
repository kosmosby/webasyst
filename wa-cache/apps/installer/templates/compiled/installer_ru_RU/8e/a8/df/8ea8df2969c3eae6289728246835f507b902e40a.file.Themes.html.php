<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 20:14:25
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.html" */ ?>
<?php /*%%SmartyHeaderCode:17950821685a7f52a104dca5-54869644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea8df2969c3eae6289728246835f507b902e40a' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '83eeb7855b3f98bfc1a5951cd7e3b217ed84ab38' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17950821685a7f52a104dca5-54869644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_name' => 0,
    'apps' => 0,
    'app' => 0,
    'slug' => 0,
    'vendor' => 0,
    'wa_url' => 0,
    'extras' => 0,
    'theme' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7f52a1431191_85767108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f52a1431191_85767108')) {function content_5a7f52a1431191_85767108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?>
<!-- theme filters -->
<div class="i-filters js-filters">

    <div class="float-right">
        <ul class="menu-h i-sort js-filter" data-filter="commercial|sort">
            <li class="selected"><a href="#/themes/" data-href="#/themes%filter%%query%/" class="inline-link"><b><i>Популярные</i></b></a></li>
            <li><a href="#/themes&commercial=true/" data-href="#/themes&commercial=true%filter%%query%/" class="inline-link"><b><i>Платные</i></b></a></li>
            <li><a href="#/themes&commercial=false/" data-href="#/themes&commercial=false%filter%%query%/" class="inline-link"><b><i>Бесплатно</i></b></a></li>
            <li><a href="#/themes&sort=new/" data-href="#/themes&sort=new%filter%%query%/" class="inline-link"><b><i>Новые</i></b></a></li>
        </ul>
    </div>


    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?>
    <div class="float-right">
        <ul class="menu-h i-filter-price js-filter" data-filter="vendor">
            <li><a href="#/themes/" data-href="#/themes%query%%filter%/"><i class="icon16 close"></i><?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        </ul>
    </div>
    <?php }?>
    <!-- app filter -->

    <div class="float-left">
        <ul class="menu-h with-icons dropdown js-query">
            <li>
                <a href="#/themes/" data-href="#/themes%query%%filter%/" class="inline-link">
                    <i class="icon16 link"></i>
                    <b><i><strong>Универсальные темы</strong></i></b><span class="hint"></span>
                    <i class="icon10 darr"></i>
                </a>

                <ul class="menu-v with-icons">

                    <li class="selected"><a href="#/themes/" data-href="#/themes%filter%/" class="bold"><i class="icon16 link"></i>Универсальные темы<?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?> <span class="hint"><?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></a>
                    </li>

                    <!-- list all installed apps -->
                    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['installed'])&&$_smarty_tpl->tpl_vars['app']->value['enabled']){?> <?php $_smarty_tpl->tpl_vars['app_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['slug'], null, 0);?>
                            <li <?php if (isset($_smarty_tpl->tpl_vars['slug']->value)&&$_smarty_tpl->tpl_vars['slug']->value==$_smarty_tpl->tpl_vars['app']->value['slug']&&(!isset($_smarty_tpl->tpl_vars['vendor']->value)||$_smarty_tpl->tpl_vars['vendor']->value==$_smarty_tpl->tpl_vars['app']->value['vendor'])){?>class="selected"<?php }?>>
                                <a href="#/themes&slug=<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/" data-href="#/themes%filter%&slug=<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/">
                                    <?php if (strpos($_smarty_tpl->tpl_vars['app']->value['icons'][16],'.')){?><img src="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['app']->value['icons'][16],'@^/@',$_smarty_tpl->tpl_vars['wa_url']->value);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }else{ ?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][16];?>
"></i><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['app']->value['name'])===null||$tmp==='' ? $_tmp1 : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                                     <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['themes'])&&false){?>
                                        <span class="count"><?php if (is_array($_smarty_tpl->tpl_vars['app']->value['themes'])){?><?php echo count($_smarty_tpl->tpl_vars['app']->value['themes']);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['app']->value['themes'];?>
<?php }?></span>
                                     <?php }?>
                                     <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><span class="hint"><?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                                </a>
                            </li>
                         <?php }?>
                    <?php } ?>
                    <?php }else{ ?>
                        <li>
                            <br /><br />
                            <p class="align-center hint">Не установлено ни одного приложения с поддержкой тем оформления.</p>
                        </li>
                    <?php }?>
                </ul>

            </li>
        </ul>
    </div>

</div>

<!-- theme list -->
<div class="block double-padded" id="themes-list">

    <?php if (!empty($_smarty_tpl->tpl_vars['extras']->value)){?>
        <ul class="thumbs js-list-items">
        
        <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['extras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['app']->key;
?>

        <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_smarty_tpl->tpl_vars['theme_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['app']->value['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value){
$_smarty_tpl->tpl_vars['theme']->_loop = true;
 $_smarty_tpl->tpl_vars['theme_id']->value = $_smarty_tpl->tpl_vars['theme']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['theme']->value['installed']){?> class="i-installed"<?php }?>
                    data-filter-commercial="<?php if (empty($_smarty_tpl->tpl_vars['theme']->value['commercial'])){?>false<?php }else{ ?>true<?php }?>"
                    data-sort-new="<?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['publish_datetime'])){?><?php echo strtotime($_smarty_tpl->tpl_vars['theme']->value['publish_datetime']);?>
<?php }else{ ?>0<?php }?>"
                    data-sort="-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme']->value['sort'])===null||$tmp==='' ? 1000 : $tmp);?>
"
            >
                <?php /*  Call merged included template "./Themes.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Themes.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17950821685a7f52a104dca5-54869644');
content_5a7f52a12d7cb5_57625606($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Themes.include.html" */?>
            </li>
         <?php } ?>
         <?php }
if (!$_smarty_tpl->tpl_vars['app']->_loop) {
?>
            <p class="align-center gray">Не найдено ни одной темы дизайна.</p>
        <?php } ?>
         </ul>
    <?php }else{ ?>
        <p class="align-center gray">Не найдено ни одной темы дизайна.</p>
    <?php }?>




<!--
     Темы оформления загружаются с сайта webasyst.com и устанавливаются одним щелчком мыши.
-->
</div>

<script type="text/javascript">
    <!--
    $.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo strtr(("Темы дизайна").(" — ").($_tmp2), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    //-->
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 20:14:25
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/themes/Themes.include.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7f52a12d7cb5_57625606')) {function content_5a7f52a12d7cb5_57625606($_smarty_tpl) {?><a href="#/themes/<?php echo $_smarty_tpl->tpl_vars['theme_id']->value;?>
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
<?php }} ?>