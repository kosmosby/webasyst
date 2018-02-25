<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:20
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:13182110965a7ff97c01e685-75584433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc110d77ad01180a4166ac2f721dd485bba9f4fa' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/contacts/ContactsInfo.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13182110965a7ff97c01e685-75584433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'static_url' => 0,
    'wa_app_url' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'last_view_context' => 0,
    'exists' => 0,
    'contact' => 0,
    'readonly' => 0,
    'photo_editor_url' => 0,
    'backend_contact_info' => 0,
    '_' => 0,
    'top' => 0,
    'top_field' => 0,
    'superadmin' => 0,
    'own_profile' => 0,
    'limited_own_profile' => 0,
    'author' => 0,
    'contact_create_time' => 0,
    'links' => 0,
    'wa_view' => 0,
    'tab' => 0,
    'wa_backend_url' => 0,
    'current_user_id' => 0,
    'save_url' => 0,
    'save_geocoords_url' => 0,
    'password_save_url' => 0,
    'regions_url' => 0,
    'contactFields' => 0,
    'contactFieldsOrder' => 0,
    'fieldValues' => 0,
    'history' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff97c522642_77985635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff97c522642_77985635')) {function content_5a7ff97c522642_77985635($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/block.wa_js.php';
?><?php if ($_smarty_tpl->tpl_vars['wa']->value->request('standalone')){?>

    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/compiled/contact-info-standalone.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/compiled/contact-info-standalone.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
js/fieldTypes.js
        <?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
js/wa.contactEditor.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/compiled/contact-info-standalone.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
css/contacts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
css/contacts.ie7.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
css/contacts.ie8.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=loc&v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js(false);?>


    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

    <?php } ?>

<?php }?>

<div class="contacts-background" id="c-info-container">

    <div class="block padded c-core-header" style="display:none">
        <a href="javascript:void(0)" id="c-e-last-view" class="no-underline"></a>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['last_view_context']->value)===null||$tmp==='' ? false : $tmp)){?>
            <div class="paging float-right nowrap">
                <?php if ($_smarty_tpl->tpl_vars['last_view_context']->value['prev']){?>
                    <a class="hidden prev contact" href="#/contact/<?php echo $_smarty_tpl->tpl_vars['last_view_context']->value['prev'];?>
/" style="display: inline;" data-offset="<?php echo max($_smarty_tpl->tpl_vars['last_view_context']->value['offset']-1,0);?>
"><i class="icon10 larr"></i> пред</a>
                <?php }else{ ?>
                    <span class="gray"><i class="icon10 larr"></i> пред</span>
                <?php }?>
                <span class="custom hint">
                    <span class="index-current"><?php echo $_smarty_tpl->tpl_vars['last_view_context']->value['offset']+1;?>
</span>
                    из
                    <span class="index-total"><?php echo $_smarty_tpl->tpl_vars['last_view_context']->value['total_count'];?>
</span>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['last_view_context']->value['next']){?>
                    <a class="hidden next contact" href="#/contact/<?php echo $_smarty_tpl->tpl_vars['last_view_context']->value['next'];?>
/" style="display: inline;" data-offset="<?php echo min($_smarty_tpl->tpl_vars['last_view_context']->value['offset']+1,$_smarty_tpl->tpl_vars['last_view_context']->value['total_count']);?>
">след <i class="icon10 rarr"></i></a>
                <?php }else{ ?>
                    <span class="gray">след <i class="icon10 rarr"></i></span>
                <?php }?>
            </div>
        <?php }?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['exists']->value){?>

        <!-- content -->
        <div class="block not-padded c-core-content">
            <div class="block">
                
                <div id="contact-top-block" class="wa-box" style="display:none"></div>

                <div class="profile image96px" style="min-height: 120px">
                    
                    <div class="photo image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['contact']->value->getPhoto();?>
" alt="<?php if ($_smarty_tpl->tpl_vars['contact']->value['photo']){?>Фото<?php }else{ ?>Нет фотографии<?php }?>" class="userpic" />
                        <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')){?>
                            <div class="wa-contact-photo-buttons">
                                <div class="photo-change-link">
                                    <a href="<?php echo ifset($_smarty_tpl->tpl_vars['photo_editor_url']->value,($_smarty_tpl->tpl_vars['wa_app_url']->value).("#/contact/photo/".((string)$_smarty_tpl->tpl_vars['contact']->value->getId())));?>
">Изменить фото</a>
                                </div>
                            </div>
                        <?php }?>

                        <!-- plugin hook: 'backend_contact_info.photo' -->
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['photo']);?>
<?php } ?>
                        <?php }?>

                    </div>
                    <div class="details">

                        <!-- plugin hook: 'backend_contact_info.before_header' -->
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['before_header']);?>
<?php } ?>
                        <?php }?>

                        <div class="details-header" id="contact-fullname">
                            <h1 class="name"><span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['middlename'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                            <?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_company']){?>
                                <h1 class="jobtitle-company">
                                    <?php if ($_smarty_tpl->tpl_vars['contact']->value['jobtitle']){?>
                                        <span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['jobtitle'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['contact']->value['jobtitle']&&$_smarty_tpl->tpl_vars['contact']->value['company']){?>
                                        <span class="at">в</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['contact']->value['company']){?>
                                        <span class="company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php }?>
                                </h1>
                            <?php }?>

                            <!-- plugin hook: 'backend_contact_info.header' -->
                            
                            <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['header']);?>
<?php } ?>
                            <?php }?>

                        </div>

                        <!-- plugin hook: 'backend_contact_info.after_header' -->
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['after_header']);?>
<?php } ?>
                        <?php }?>

                        <p class="status"></p>

                        <!-- plugin hook: 'backend_contact_info.before_top' -->
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['before_top']);?>
<?php } ?>
                        <?php }?>

                        <ul id="contact-info-top" class="menu-v compact">
                            <?php if ($_smarty_tpl->tpl_vars['top']->value){?>
                                <?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?>
                                    <li><?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!='im'){?><?php if ($_smarty_tpl->tpl_vars['top_field']->value['icon']){?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"></i><?php }?><?php }?><?php echo $_smarty_tpl->tpl_vars['top_field']->value['value'];?>
</li>
                                <?php } ?>
                            <?php }?>
                        </ul>

                        <!-- plugin hook: 'backend_contact_info.after_top' -->
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['backend_contact_info']->value)){?>
                            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_contact_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['after_top']);?>
<?php } ?>
                        <?php }?>

                    </div>
                </div>
            </div>

            
            <ul class="tabs" id="c-info-tabs">
                <li id="t-contact" class="selected"><a href="javascript:void(0)">Контакт</a></li>

                
                <?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_company']&&($_smarty_tpl->tpl_vars['superadmin']->value||!empty($_smarty_tpl->tpl_vars['own_profile']->value))){?>
                    <li id="t-user">
                        <a href="javascript:void(0)">
                            <?php echo contactsHelper::getAccessTabTitle($_smarty_tpl->tpl_vars['contact']->value);?>

                        </a>
                    </li>
                <?php }?>
            </ul>

            
            <div class="block not-padded tab-contents-wrapper">
                <div id="tc-contact" class="tab-content">
                    <div class="block double-padded">
                        <?php if (($_smarty_tpl->tpl_vars['own_profile']->value||empty($_smarty_tpl->tpl_vars['readonly']->value))&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')){?>
                            <a class="float-right no-underline c-edit-contact" href="javascript:void(0);" id="edit-contact-double">
                                <i class="icon16 edit"></i>Редактировать
                            </a>
                        <?php }?>
                        <div class="fields">
                            <div id="contact-info-block">
                                <!-- Contents generated by JS later -->
                            </div>

                            
                            <?php if (empty($_smarty_tpl->tpl_vars['limited_own_profile']->value)){?>
                                <ul class="hint c-create-method-info">
                                    <li>ID: <?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
</li>
                                    <li>Добавил: <?php if (!empty($_smarty_tpl->tpl_vars['author']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['author']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php }?><?php echo $_smarty_tpl->tpl_vars['contact_create_time']->value;?>
</li>
                                    <li>Метод: <?php if ($_smarty_tpl->tpl_vars['contact']->value['create_method']){?><?php echo $_smarty_tpl->tpl_vars['contact']->value['create_method'];?>
 (<?php echo $_smarty_tpl->tpl_vars['contact']->value['create_app_id'];?>
)<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['contact']->value['create_app_id'];?>
<?php }?></li>
                                </ul>
                            <?php }?>
                        </div>
                        <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')&&empty($_smarty_tpl->tpl_vars['own_profile']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('no_delete')){?>
                            <div style="width: 100%; float: left;" id="c-delete-contact-wrapper">
                                <a href="javascript:void(0);" class="float-right no-underline small delete" id="delete-contact">Удалить контакт</a>
                            </div>
                        <?php }?>
                        <div class="clear-left"></div>
                    </div>
                </div>

                
                <?php if (!$_smarty_tpl->tpl_vars['contact']->value['is_company']&&($_smarty_tpl->tpl_vars['superadmin']->value||!empty($_smarty_tpl->tpl_vars['own_profile']->value))){?>
                    <div id="tc-user" class="tab-content hidden">
                        <div class="block double-padded">
                            <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/contacts/ContactsUser.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
                    </div>
                <?php }?>

                

                <?php if (!empty($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['wa_view']->value->templateExists("templates/actions/contacts/ContactsInfoTabs.html")){?>
                    <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/contacts/ContactsInfoTabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php }?>
            </div>

            <div class="clear-left"></div>
        </div>

    <?php }else{ ?>

        <div class="block" style="text-align: center;">
            <h2 style="margin-top: 50px;">Контакт не найден (Contact ID=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
)</h2>
            <div class="clear-left"></div>
        </div>

    <?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['exists']->value){?>

    <script type="text/javascript">

        if (!$.storage) {
            $.storage = new $.store();
        }

        // 'Back to' link
        <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('no_backlink')){?>
        if($.wa.controller.lastView && $.wa.controller.lastView.title) {
            $('#c-e-last-view')
                .text($.wa.controller.lastView.title)
                .prepend('<i class="icon10 larr"></i>')
                .attr('href', $.wa.controller.lastView.hash || '#/')
                .parent()
                .show();
        }
        <?php }?>
        var edit_mode = window.location.hash.indexOf('/contact/edit') >= 0;
        var delete_mode = !edit_mode && window.location.hash.indexOf('/contact/delete') >= 0;

        // attach tab controls to tabs
        (function() {
            var wrapper = $('#c-info-tabs');

            // Drag-and-drop tabs, saving their position to local browser storage
            wrapper.sortable({
                items: 'li',
                tolerance: "pointer",
                distance: 7,
                delay: 50,
                update: function(event, ui) {
                    $.storage.set('contacts/tab_order', wrapper.children().map(function(i, el) {
                        return el.id;
                    }).toArray());
                }
            });

            // Restore tabs order
            var old_tabs_order = $.storage.get('contacts/tab_order');
            if (old_tabs_order) {
                var children = {};
                wrapper.children().detach().each(function(i, el) {
                    children[el.id] = el;
                });

                $.each(old_tabs_order, function(i, id) {
                    if (children[id]) {
                        wrapper.append(children[id]);
                        delete children[id];
                    }
                });
                $.each(children, function(i, el) {
                    wrapper.append(el);
                });
            }

            // Switch to tab when user clicks on it
            <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('no_switchtab')){?>
                // !!! TODO: use delegation instead?..
                wrapper.children().each(function(k, tab) {
                    tab = $(tab);
                    tab.bind('click.switch_tab', function() {
                        $.wa.contactEditor.switchToTab(tab, function() {
                            var id = tab.attr('id').substr(2);
                            var hash = '#/contact/<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
/';
                            if (id != 'contact' || tab.prev().length) {
                                hash += id+'/';
                            }
                            hash = $.wa.controller.cleanHash(hash);
                            if (hash != $.wa.controller.cleanHash()) {
                                $.wa.controller.stopDispatch(1);
                                $.wa.setHash(hash);
                            }
                            var input = $('#tc-'+id+' input:visible')[0];
                            if (input) {
                                input.focus();
                            }
                        });
                    });
                });
            <?php }else{ ?>
                $('#c-info-tabs li').bind('click.switch_tab', function() {
                    $.wa.contactEditor.switchToTab($(this));
                });
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['tab']->value){?>
                // Switch to active tab
                $('#t-<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
').click();
            <?php }else{ ?>
                // Open first tab
                wrapper.children(':first').click();
            <?php }?>

        })();

        <?php if (!empty($_smarty_tpl->tpl_vars['limited_own_profile']->value)){?>
            $.wa.contactEditor.wa_app_url = '';
        <?php }else{ ?>
            $.wa.contactEditor.wa_app_url = '<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
';
        <?php }?>
        $.wa.contactEditor.update_title = <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('no_update_title')){?>true<?php }else{ ?>false<?php }?>;
        $.wa.contactEditor.wa_backend_url = '<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
';
        $.wa.contactEditor.contact_id = <?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
;
        $.wa.contactEditor.current_user_id = <?php echo $_smarty_tpl->tpl_vars['current_user_id']->value;?>
;
        $.wa.contactEditor.contactType = '<?php if ($_smarty_tpl->tpl_vars['contact']->value['is_company']){?>company<?php }else{ ?>person<?php }?>';
        
        $.wa.contactEditor.justCreated = false;
        <?php if (!empty($_smarty_tpl->tpl_vars['save_url']->value)){?>
            $.wa.contactEditor.saveUrl = "<?php echo $_smarty_tpl->tpl_vars['save_url']->value;?>
";
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['save_geocoords_url']->value)){?>
            $.wa.contactEditor.saveGeocoordsUrl = "<?php echo $_smarty_tpl->tpl_vars['save_geocoords_url']->value;?>
";
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['password_save_url']->value)){?>
            $.wa.contactEditor.passwdSaveUrl = "<?php echo $_smarty_tpl->tpl_vars['password_save_url']->value;?>
";
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['regions_url']->value)){?>
            $.wa.contactEditor.regionsUrl = "<?php echo $_smarty_tpl->tpl_vars['regions_url']->value;?>
";
        <?php }?>

        $.wa.contactEditor.initFactories(<?php echo json_encode($_smarty_tpl->tpl_vars['contactFields']->value);?>
, <?php echo json_encode($_smarty_tpl->tpl_vars['contactFieldsOrder']->value);?>
);
        $.wa.contactEditor.initAllEditors();
        $.wa.contactEditor.initFieldEditors(<?php echo json_encode($_smarty_tpl->tpl_vars['fieldValues']->value);?>
);
        $.wa.contactEditor.initContactInfoBlock('view');

        <?php if (($_smarty_tpl->tpl_vars['own_profile']->value||empty($_smarty_tpl->tpl_vars['readonly']->value))&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')){?>
            // Edit button onclick
            $('.c-edit-contact').click(function() {
                $.wa.contactEditor.switchToTab('contact');
                $.wa.contactEditor.switchMode('edit');
                return false;
            });
            if (edit_mode) {
                $.wa.contactEditor.switchMode('edit');
            }

            <?php if (empty($_smarty_tpl->tpl_vars['own_profile']->value)){?>
                // AJAX checking dialog before user deletion
                $("#delete-contact").click(function () {
                    $.wa.controller.contactsDelete([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
]);
                    return false;
                });
                if (delete_mode) {
                    $.wa.controller.contactsDelete([<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
]);
                }
            <?php }?>

        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['wa']->value->request('standalone')&&!empty($_smarty_tpl->tpl_vars['history']->value)){?>
            // Update history
            $.wa.history.updateHistory(<?php echo json_encode($_smarty_tpl->tpl_vars['history']->value);?>
);
        <?php }?>

        var paging = $('.c-core-header .paging');
        $(document).unbind('keyup').bind('keyup', function(e) {
            if ((e.ctrlKey || e.metaKey) && !(e.altKey || e.shiftKey)) {
                var a = null;
                if (e.which == 37) { // left arrow
                    a = paging.find('.prev');
                } else if (e.which == 39) { // right arrow
                    a = paging.find('.next');
                }
                if (a && a.is(':visible')) {
                    $.wa.controller.lastView.offset = a.data('offset') || 0;
                    window.location.hash = a.attr('href');
                }
            }
        });

        <?php if (empty($_smarty_tpl->tpl_vars['readonly']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('readonly')&&empty($_smarty_tpl->tpl_vars['own_profile']->value)&&!$_smarty_tpl->tpl_vars['wa']->value->request('no_delete')){?>
            var info_block = $('#contact-info-block');
            var bottom_offset = info_block.offset().top + info_block.height();
            var wrapper = $('#c-delete-contact-wrapper');
            var offset = wrapper.offset().top;
            wrapper.css('margin-top', (bottom_offset - offset) + 30);
        <?php }?>

    </script>

<?php }?>

<?php }} ?>