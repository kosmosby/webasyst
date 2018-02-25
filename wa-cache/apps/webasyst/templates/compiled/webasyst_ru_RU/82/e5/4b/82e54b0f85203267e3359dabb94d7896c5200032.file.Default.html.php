<?php /* Smarty version Smarty-3.1.14, created on 2018-02-10 08:05:20
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-widgets/news/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:4890046425a7ea7c05ecea5-32586194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e54b0f85203267e3359dabb94d7896c5200032' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-widgets/news/templates/Default.html',
      1 => 1516800552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4890046425a7ea7c05ecea5-32586194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rss_url' => 0,
    'channel' => 0,
    'uniqid' => 0,
    'items' => 0,
    '_item' => 0,
    'widget_url' => 0,
    'wa' => 0,
    'widget_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ea7c06cb781_35598212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ea7c06cb781_35598212')) {function content_5a7ea7c06cb781_35598212($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><style>
.wa-news-widget .snw-entry { margin-bottom: 10px; line-height: 1em; font-family: 'Helvetica Neue', Arial, sans-serif; }
.wa-news-widget .snw-entry a { text-decoration: none; }

.wa-empty-feed { margin: 30px 20px; font-weight: normal; }

.widget-2x1 .wa-empty-feed { margin: 45px 55px; }
.widget-2x2 .wa-empty-feed { margin: 105px 35px; }

.widget-block .wa-news-widget .wa-link-to-all-news {
    position: absolute; bottom: 0; left: 0; right: 0; text-align: center; opacity: 0; padding: 18px 0 0; transition: opacity 0.5s ease-in-out;
    background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 47%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(47%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
.widget-block:hover .wa-news-widget .wa-link-to-all-news { opacity: 1; }

/* TV */
.tv .widget-block .wa-news-widget .wa-link-to-all-news {
    background: -moz-linear-gradient(top,  rgba(51,51,51,0) 0%, rgba(51,51,51,1) 47%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(51,51,51,0)), color-stop(47%,rgba(51,51,51,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00515151', endColorstr='#515151',GradientType=0 ); /* IE6-9 */
}
</style>
<?php if (empty($_smarty_tpl->tpl_vars['rss_url']->value)){?>
    <div class="block">
        <h5 class="align-center hint wa-empty-feed">Выберите источник новостей в настройках виджета.</h5>
    </div>
<?php }elseif(empty($_smarty_tpl->tpl_vars['channel']->value['name'])){?>
    <div class="block">
        <h5 class="align-center hint wa-empty-feed">Ошибка загрузки ленты новостей.</h5>
    </div>
<?php }else{ ?>
    <div class="block wa-news-widget" id="<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
?>
        <p class="snw-entry">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_item']->value['link'];?>
" class="entry-title entry-link" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <span class="entry-datetime hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['_item']->value['date']);?>
</span>
        </p>
        <?php } ?>

        <?php if (!empty($_smarty_tpl->tpl_vars['channel']->value['link'])){?>
        <div class="wa-link-to-all-news">
            <div class="block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['channel']->value['link'];?>
" target="_blank">Показать все новости <i class="icon16 new-window"></i></a>
            </div>
        </div>
        <?php }?>
    </div>
        <script>
            (function ($) {
                var is_loaded = (typeof newsWidget !== "undefined"),
                    js_href = "<?php echo $_smarty_tpl->tpl_vars['widget_url']->value;?>
js/news.widget.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
                    widget = DashboardWidgets["<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"],
                    options = {
                        widget_id: <?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>

                    };

                (is_loaded) ? initWidget() : $.getScript(js_href, initWidget);

                function initWidget() {
                    widget.news = new newsWidget(options);
                }
            })(jQuery);
    </script>
<?php }?>
<?php }} ?>