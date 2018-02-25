<?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:48:26
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/layouts/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:20876243965a7ff975beb2a4-89800748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3ff86bcd6f72b429574efd1ba039f444e8beaa' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/layouts/Default.html',
      1 => 1519119441,
      2 => 'file',
    ),
    '6e36c1610af3ef06ce884dbdb144b61b4585da6d' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/layouts/include.templates.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20876243965a7ff975beb2a4-89800748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff975dedc31_62717990',
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'lang' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'wa_app' => 0,
    'sidebar' => 0,
    'content' => 0,
    'backend_templates' => 0,
    'paginator_type' => 0,
    'fields' => 0,
    'global_admin' => 0,
    'admin' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff975dedc31_62717990')) {function content_5a7ff975dedc31_62717990($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/block.wa_js.php';
if (!is_callable('smarty_function_wa_header')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/function.wa_header.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.replace.php';
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
<!--[if IE 7]>
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.ie7.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
<![endif]-->
<!--[if IE 8]>
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/contacts.ie8.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
<![endif]-->

<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" type="text/css" />


<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/compiled/contacts-jquery.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts-jquery.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery-ui.custom.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js
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
wa-content/js/jquery-ui/jquery.ui.position.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.formalize.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-imageareaselect/jquery.imgareaselect.min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.json.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.scrollTo-min.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/json2.js
    <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.hoverIntent.minified.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.sticky.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts-jquery.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<script type="text/javascript" src="?action=loc&v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
<?php }?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/compiled/contacts.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.controller.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.grid.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.history.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/fieldTypes.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/wa.contactEditor.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/compiled/contacts.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->js(false);?>



<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php } ?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
"><div id="wa">
    <?php echo smarty_function_wa_header(array(),$_smarty_tpl);?>

    <div id="wa-app">
        <div class="sidebar left200px" id="c-sidebar"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
</div>
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


<?php /*  Call merged included template "./include.templates.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./include.templates.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20876243965a7ff975beb2a4-89800748');
content_5a8beeeb4e3039_04604931($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.templates.html" */?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

<?php } ?>

<script type="text/javascript">
$.wa.controller.init({
    url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
",
    backend_url: "<?php echo wa_backend_url();?>
",
    rights: {
        edit: <?php echo json_encode(!!$_smarty_tpl->tpl_vars['wa']->value->user()->getRights('contacts','edit'));?>

    },
    paginator_type: <?php echo json_encode($_smarty_tpl->tpl_vars['paginator_type']->value);?>

});
$.wa.grid.init({ fields: <?php echo json_encode($_smarty_tpl->tpl_vars['fields']->value);?>
, app_url: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
"});
$.wa.controller.global_admin = <?php if (empty($_smarty_tpl->tpl_vars['global_admin']->value)){?>0<?php }else{ ?>1<?php }?>;
$.wa.controller.admin = <?php if (empty($_smarty_tpl->tpl_vars['admin']->value)){?>0<?php }else{ ?>1<?php }?>;
$.wa.controller.accountName = "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['wa']->value->accountName(),'"','\"');?>
";
$.wa.controller.groups = <?php echo json_encode($_smarty_tpl->tpl_vars['groups']->value);?>
;
<?php if (empty($_smarty_tpl->tpl_vars['content']->value)){?>
    if($.wa.controller.getHash()) {
        $.wa.controller.dispatch();
    } else {
        $.wa.controller.lastPage();
    }
<?php }?>
</script>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-20 09:48:27
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/layouts/include.templates.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8beeeb4e3039_04604931')) {function content_5a8beeeb4e3039_04604931($_smarty_tpl) {?><script id="template-contacts-list-table" type="text/html">

    {% var contacts = o.contacts || []; %}
    {% var fields = $.extend({}, o.fields || {}); %}
    {% var custom_fields = {}; %}
    {% var vertical_fields = {}; %}
    {% var custom_count = 0; %}
    {% for (var field_id in fields) { %}
        {% if (!fields.hasOwnProperty(field_id)) { %}
            {% continue; %}
        {% } %}
        {% if (fields[field_id].type === 'Custom') { %}
            {% custom_fields[field_id] = fields[field_id]; %}
            {% custom_count += 1; %}
            {% delete fields[field_id]; %}
        {% } else if (fields[field_id].vertical) { %}
            {% vertical_fields[field_id] = fields[field_id]; %}
            {% delete fields[field_id]; %}
        {% } %}
    {% } %}
    <table class="view-list table {% if (!$.isEmptyObject(custom_fields)) { %}list-with-custom-fields{% } %} {% if (custom_count === 1) { %}one-field{% } %}">
        <thead class="c-list-top-line">
            <tr>
                <td class="first-td"></td>
                {% if (!$.isEmptyObject(vertical_fields)) { %}
                    {% for (var field_id in vertical_fields) { %}
                        {% if (!vertical_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        <td></td>
                    {% } %}
                {% } %}
                <td class="c-email-td"></td>
                {% if (!$.isEmptyObject(custom_fields)) { %}
                    {% var k = 0; %}
                    {% for (var field_id in custom_fields) { %}
                        {% if (!custom_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        <td class="custom-field-th {% if (k === 0) { %}first{% } %} {% if (k === custom_count - 1) { %}last{% } %}" data-field-id="{%#field_id%}">
                            <div class="wrapper">
                                <span class="name">{%=''+custom_fields[field_id].name%}</span>
                            </div>
                        </td>
                        {% k += 1; %}
                    {% } %}
                {% } %}
                <td class="c-service-column c-service-th" style="display:none;"></td>
            </tr>
        </thead>
        <tbody>
        {% for (var i = 0, n = contacts.length, contact = contacts[0]; i < n; contact = contacts[++i]) { %}
            <tr class="contact-row">
                <td class="profile {% if (!$.isEmptyObject(custom_fields)) { %}with-custom-fields{% } %}">
                    <div class="details">
                        <input class="selector" name="c_list_selector" value="{%#contact.id%}" type="checkbox">
                        <a href="#/contact/{%#contact.id%}/" class="details-header contact" data-offset="{%#contact.offset%}">
                            <span class="name">
                                {% var names = $.wa.grid.formNamesHtml(contact); %}
                                {%#names[0]%}
                            </span>
                        </a>
                        {% if (names[1]) { %}
                            <span class="jobtitle-company">{%#names[1]%}</span>
                        {% } %}
                    </div>
                </td>
                <td class="c-email-td">
                    {% if (!$.isEmptyObject(contact.email)) { %}
                        {% for (var e = 0; e < contact.email.length; e += 1) { %}
                            <a href="mailto:{%=contact.email[e]%}">{%=contact.email[e]%}</a>{% if (e < contact.email.length - 1) { %}, {% } %}
                        {% } %}
                    {% } %}
                </td>
                {% if (!$.isEmptyObject(vertical_fields)) { %}
                    {% for (var field_id in vertical_fields) { %}
                        {% if (!vertical_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        {% var v = $.wa.grid.formatFieldValue(contact[vertical_fields[field_id].id], vertical_fields[field_id]); %}
                        <td>{%#''+v%}</td>
                    {% } %}
                {% } %}
                {% if (!$.isEmptyObject(custom_fields)) { %}  
                    {% var k = 0; %}
                    {% for (var field_id in custom_fields) { %}
                        {% if (!custom_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        {% var v = $.wa.grid.formatFieldValue(contact[custom_fields[field_id].id], custom_fields[field_id]); %}
                        <td class="custom-field-td {% if (k === 0) { %}first{% } %} {% if (k === custom_count - 1) { %}last{% } %}" data-field-id="{%#field_id%}">{%#''+v%}</td>
                        {% k += 1; %}
                    {% } %}
                {% } %}
                <td class="c-service-column c-service-td" style="display:none;"></td>
            </tr>
        {% } %}
        </tbody>
    </table>

</script>

<script id="template-contacts-fields" type="text/html">

    {% var contact = o.contact || {}; %}
    
    {% var fields = $.extend({}, o.fields || {}); %}
    {% for (var field_id in fields) { %}
        {% if (!fields.hasOwnProperty(field_id) || fields[field_id].type === 'Custom') { continue;  } %}
        {% var f = fields[field_id]; %}
        {% if (!contact[field_id] || 
                contact[field_id] == '0000-00-00' || 
                (typeof contact[field_id].length != 'undefined' && !contact[field_id].length)
            ) { continue; } %}
        {% if (f.fields) { %}
            {% if (typeof contact[field_id] == 'object') { %}
                {% for (var j = 0; j < contact[field_id].length; j++) { %}
                    {% if (f.type !== 'Address') { %}
                        <p>
                            <span class="c-details-label">{%=f.name%}
                                {% if ($.trim(contact[field_id][j].ext)) { %}
                                    // is it a predefined extension?
                                    {% if (f.ext && f.ext[contact[field_id][j].ext]) { %}
                                         <span>({%=f.ext[contact[field_id][j].ext]%})</span>
                                    {% } else { %}
                                        <span>({%=contact[field_id][j].ext%})</span>
                                    {% } %}
                                {% } %}:
                            </span>
                        {%#$.wa.grid.highlight($.wa.grid.viewlistvalue(contact[field_id][j], f))%}</p>
                    {% } else { %}
                        <p>
                            {%#$.wa.grid.highlight($.wa.grid.viewlistvalue(contact[field_id][j], f))%}
                            {% if ($.trim(contact[field_id][j].ext)) { %}
                                <em class="hint">{%#f.ext[contact[field_id][j].ext]%}</em>
                            {% } %}
                        </p>
                    {% } %}
                {% } %}
            {% } else { %}
                <p>
                    <span class="c-details-label">{%=f.name%}:</span>
                    {%#$.wa.grid.highlight($.wa.grid.viewlistvalue(contact[field_id], true))%}
                </p>
            {% } %}
        {% } else { %}
            <p>
                {% if (f.type !== 'Email' && f.type !== 'IM' && f.type !== 'Phone' && f.type !== 'SocialNetwork') { %}
                    <span class="c-details-label">{%=f.name%}:</span>
                {% } %}
                {% if (typeof(contact[field_id]) === 'object') { %}
                    {% var v = [], t; %} 
                    {% for (var j = 0; j < contact[field_id].length; j++) { %}
                        {% t = $.wa.grid.viewlistvalue(contact[field_id][j], f); %}
                        {% if (f.type === 'Email' || f.type === 'Url') { %}
                            {% var m = t.match(/<a[\s\S]*?<?php ?>>([^<|^>]*?)</); %}
                            {% if (m && m[1]) { %}
                                {% t = t.replace(/(<a[\s\S]*?<?php ?>>)([^<|^>]*?)</, "$1" + $.wa.grid.highlight(m[1]) + "<"); %}
                            {% } %}
                        {% } else { %}
                            {% t = $.wa.grid.highlight(t); %}
                        {% } %}
                        {% v.push(t); %}
                    {% } %}
                    {%#v.join(', ')%}
                {% } else { %}
                    {%#$.wa.grid.highlight($.wa.grid.viewlistvalue(contact[field_id], f))%}
                {% } %}
            </p>
        {% } %}
    {% } %}

</script>

<script id="template-contacts-list-list" type="text/html">

    {% var contacts = o.contacts || []; %}
    {% var fields = $.extend({}, o.fields || {}); %}
    {% var custom_fields = {}; %}
    {% var custom_count = 0; %}
    {% var vertical_fields = {}; %}
    {% for (var field_id in fields) { %}
        {% if (!fields.hasOwnProperty(field_id)) { %}
            {% continue; %}
        {% } %}
        {% if (fields[field_id].type === 'Custom') { %}
            {% custom_fields[field_id] = fields[field_id]; %}
            {% custom_count += 1; %}
            {% delete fields[field_id]; %}
        {% } else if (fields[field_id].vertical) { %}
            {% vertical_fields[field_id] = fields[field_id]; %}
            {% delete fields[field_id]; %}
        {% } %}
    {% } %}
    <table class="view-list list {% if (!$.isEmptyObject(custom_fields)) { %}list-with-custom-fields{% } %} {% if (custom_count === 1) { %}one-field{% } %}">
        <thead class="c-list-top-line">
            <tr>
                <td class="first-td"></td>
                {% if (!$.isEmptyObject(vertical_fields)) { %}
                    {% for (var field_id in vertical_fields) { %}
                        {% if (!vertical_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        <td></td>
                    {% } %}
                {% } %}
                {% if (!$.isEmptyObject(custom_fields)) { %}
                        {% var k = 0; %}
                        {% for (var field_id in custom_fields) { %}
                            {% if (!custom_fields.hasOwnProperty(field_id)) { %}
                                {% continue; %}
                            {% } %}
                            <td class="custom-field-th {% if (k === 0) { %}first{% } %} {% if (k === custom_count - 1) { %}last{% } %}" data-field-id="{%#field_id%}">
                                <div class="wrapper">
                                    <span class="name">{%=''+custom_fields[field_id].name%}</span>
                                </div>
                            </td>
                            {% k += 1; %}
                        {% } %}
                {% } %}
                <td class="c-service-column c-service-th" style="display:none;"></td>
            </tr>
        </thead>
        <tbody>
        {% for (var i = 0, n = contacts.length, contact = contacts[0]; i < n; contact = contacts[++i]) { %}
            <tr class="contact-row">
                <td class="profile image32px {% if (!$.isEmptyObject(custom_fields)) { %}with-custom-fields{% } %}">
                    {% if (contact.photo_url_32) { %}
                        <div class="image"><img src="{%#contact.photo_url_32%}" class="userpic"></div>
                    {% } %}
                    <div class="details">
                        <input class="selector" name="c_list_selector" value="{%#contact.id%}" type="checkbox">
                        <a href="#/contact/{%#contact.id%}" class="details-header contact" data-offset="{%#contact.offset%}">
                            <h1 class="name">
                                {% var names = $.wa.grid.formNamesHtml(contact); %}
                                {%#names[0]%}
                            </h1>
                        </a>
                        {% if (names[1]) { %}
                            <h1 class="jobtitle-company">{%#names[1]%}</h1>
                        {% } %}
                        {% include('template-contacts-fields', { fields: fields || {}, contact: contact }); %}
                    </div>
                </td>
                {% if (!$.isEmptyObject(vertical_fields)) { %}
                    {% for (var field_id in vertical_fields) { %}
                        {% if (!vertical_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        {% var v = $.wa.grid.formatFieldValue(contact[vertical_fields[field_id].id], vertical_fields[field_id]); %}
                        <td>{%#''+v%}</td>
                    {% } %}
                {% } %}
                {% if (!$.isEmptyObject(custom_fields)) { %}
                    {% var k = 0; %}
                    {% for (var field_id in custom_fields) { %}
                        {% if (!custom_fields.hasOwnProperty(field_id)) { %}
                            {% continue; %}
                        {% } %}
                        {% var v = $.wa.grid.formatFieldValue(contact[custom_fields[field_id].id], custom_fields[field_id]); %}
                        <td class="custom-field-td {% if (k === 0) { %}first{% } %} {% if (k === custom_count - 1) { %}last{% } %}" data-field-id="{%#field_id%}">{%#''+v%}</td>
                        {% k += 1; %}
                    {% } %}
                {% } %}
                <td class="c-service-column c-service-td" style="display:none;"></td>
            </tr>
        {% } %}
        </tbody>
    </table>

</script>

<script id="template-contacts-list-thumbs" type="text/html">

    {% var contacts = o.contacts || []; %}
    <ul class="view-list thumbs li100px">
    {% for (var i = 0, n = contacts.length, contact = contacts[0]; i < n; contact = contacts[++i]) { %}
        <li class="contact-row">
            {% if (contact.photo_url_96) { %}
                <div class="image"><a href="#/contact/{%#contact.id%}" class="contact" data-offset="{%#contact.offset%}"><img src="{%#contact.photo_url_96%}" class="userpic"></a></div>
            {% } %}
            <input class="selector" name="c_list_selector" value="{%#contact.id%}" type="checkbox">
            <a href="#/contact/{%#contact.id%}" class="details-header contact" data-offset="{%#contact.offset%}">
                <h1 class="name">
                    {% var names = $.wa.grid.formNamesHtml(contact); %}
                    {%#names[0]%}
                </h1>
            </a>
        </li>
    {% } %}
    </ul>

</script><?php }} ?>