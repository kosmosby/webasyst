<?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/actions/post/PostEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:2071082865a8c024090a959-15566757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b92060aafa87761d97d95685709f4e9f6f1ee8' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/actions/post/PostEdit.html',
      1 => 1519320213,
      2 => 'file',
    ),
    '8f9df0955647b49749a4ad3e48651e126ca48d44' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postDeadline.html',
      1 => 1452519786,
      2 => 'file',
    ),
    '8fdc669ccfe5d49aececfb5ea79912ed5205453c' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postDelete.html',
      1 => 1452519786,
      2 => 'file',
    ),
    'd583bc8557b86f9ecb86dd9500e4f0e3ba523fd3' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postEditCustomParams.html',
      1 => 1452519786,
      2 => 'file',
    ),
    'e325c4bc800239d8346519c00c248743aaac3b39' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postPublish.html',
      1 => 1452519786,
      2 => 'file',
    ),
    'f28c48075879044c30f11552efc1c8f6b4c5db18' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postSchedule.html',
      1 => 1452519786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2071082865a8c024090a959-15566757',
  'function' => 
  array (
    'upload_album_menu' => 
    array (
      'parameter' => 
      array (
        'parent' => 0,
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a8c0243e86401_62694685',
  'variables' => 
  array (
    'wa' => 0,
    'show_comments' => 0,
    'post' => 0,
    'users' => 0,
    'id' => 0,
    'name' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
    'backend_post_edit' => 0,
    'output' => 0,
    'plugin' => 0,
    'blogs' => 0,
    'allow_change_blog' => 0,
    'blog_' => 0,
    'blog' => 0,
    'validate_messages' => 0,
    'no_settlements' => 0,
    'unsuccessful_save' => 0,
    'is_adding' => 0,
    'link' => 0,
    'preview_hash' => 0,
    'full_link' => 0,
    'albums' => 0,
    'a' => 0,
    'parent' => 0,
    'level' => 0,
    'dialogs' => 0,
    'dialog' => 0,
    'wa_url' => 0,
    'lang' => 0,
    'wa_app_static_url' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c0243e86401_62694685')) {function content_5a8c0243e86401_62694685($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_block_wa_js')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/block.wa_js.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><form id="post-form" action="" method="post">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


    <div class="hidden sidebar right200px realtime-preview">
        <div class="column-resize-handler"></div>
        <div class="block">
            <iframe id="realtime-preview-iframe" src="about:blank" sandbox="allow-scripts"></iframe>
            <div id="not-available-message" style="color: #888; padding: 150px 0 0 0; text-align: center; display: none;">
                Предпросмотр недоступен для закрытых и неопубликованных блогов.
            </div>
            <input type="hidden" name="realtime_on" value="">
        </div>
    </div>

    <div class="sidebar right200px b-post-editor-toolbar">
        <div class="block b-edit-options">

            <!-- allow comments -->
            <div class="block">
                <h6>Комментарии</h6>
                <div class="b-ibutton-checkbox" id="allow-comment-switcher-ibutton-checkbox">
                    <?php if (!$_smarty_tpl->tpl_vars['show_comments']->value){?>
                        <span id="allow-comment-switcher-off-label" class="b-unselected">Выкл</span>
                    <?php }else{ ?>
                        <ul class="menu-h">
                            <li><span id="allow-comment-switcher-off-label" class="b-unselected">Выкл</span></li>
                            <li><input id="allow-comment-switcher" type="checkbox" name="comments_allowed" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_allowed']){?>checked="checked"<?php }?>></li>
                            <li><span id="allow-comment-switcher-on-label">Вкл</span></li>
                        </ul>
                    <?php }?>
                </div>
            </div>

            <!-- author -->
            <div class="block">
                <h6>Автор</h6>
                <select class="b-toolbar-select" name="contact_id">
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['post']->value['contact_id']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            </div>

            <!-- publication datetime -->
            <div class="block">

                <?php if (($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DRAFT)||($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DEADLINE)){?>

                    <h6>Срок публикации</h6>

                    <div id="publication-deadline-changable-part">

                        <?php if (($_smarty_tpl->tpl_vars['post']->value['datetime']||$_smarty_tpl->tpl_vars['wa']->value->get('date'))&&$_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DEADLINE){?>
                            <i class="icon16 exclamation"></i><?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('date')){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['post']->value['datetime']);?>
<?php }else{ ?><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['wa']->value->get('date')));?>
<?php }?>
                            <a id="deadline-edit" href="javascript:void(0);" class="small dialog-edit">редактировать</a>
                        <?php }else{ ?>
                            <i class="icon16 exclamation"></i><a id="deadline-edit" href="javascript:void(0);" class="dialog-edit">Не установлено</a>
                            <span class="hint">Установка срока публикации позволяет планировать будущие записи, но автоматически не публикует их.</span>
                        <?php }?>
                    </div>

                    <!-- jquery template <?php $_smarty_tpl->_capture_stack[0][] = array("publication-deadline-setted-template-js", null, null); ob_start(); ?> -->
                        <i class="icon16 exclamation"></i>${date}
                        <a id="deadline-edit" href="javascript:void(0);" class="small dialog-edit">редактировать</a>
                    <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

                    <!-- jquery template <?php $_smarty_tpl->_capture_stack[0][] = array("publication-deadline-unsetted-template-js", null, null); ob_start(); ?> -->
                        <i class="icon16 exclamation"></i><a id="deadline-edit" href="javascript:void(0);" class="dialog-edit">Не установлено</a>
                        <span class="hint">Установка срока публикации позволяет планировать будущие записи, но автоматически не публикует их.</span>
                    <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                        <?php /*  Call merged included template "./../../dialogs/postDeadline.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postDeadline.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f00603fb6f1_34332622($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postDeadline.html" */?>
                        <?php /*  Call merged included template "./../../dialogs/postDelete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postDelete.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f006045a9c8_90893691($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postDelete.html" */?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php }elseif($_smarty_tpl->tpl_vars['post']->value['status']!=blogPostModel::STATUS_SCHEDULED){?>

                    <h6>Опубликовано</h6>

                    <span id="current-time" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['datetime'];?>
"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'humandatetime');?>
</span>

                    <a class="inline-link small no-wrap" id="inline-edit-datetime" href="javascript:void(0);"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>

                    <div class="datetime" style="display: none">
                        <input class="datepicker" name="datetime[]" type="text" value="<?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['post']->value['datetime']);?>
" size="8">

                        <input type="text" name="datetime[]" class="time" value="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'H');?>
" size="1" maxlength="2" autocomplete="off">:<input type="text" class="time" name="datetime[]" value="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'i');?>
" size="1" maxlength="2" autocomplete="off">

                        <br>
                        <span class="hint">(<span class="user-date-format"><!-- format placeholder --></span> формат, текущее время: <span class="current-user-time"><?php echo smarty_modifier_wa_date(time(),'time');?>
</span>)</span>

                    </div>

                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                        <?php /*  Call merged included template "./../../dialogs/postDelete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postDelete.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f006045a9c8_90893691($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postDelete.html" */?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php }?>

            </div>

            <!--  meta and custom parameters -->
            <div class="block">
                <h6>Мета</h6>
                <p class="small">
                    <span id="b-post-edit-meta-title" <?php if (!$_smarty_tpl->tpl_vars['post']->value['meta_title']){?>style="display:none;"<?php }?>>
                        <span class="gray" >Заголовок:</span> <span class="val"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                    </span>
                    <span id="b-post-edit-meta-keywords" <?php if (!$_smarty_tpl->tpl_vars['post']->value['meta_keywords']){?>style="display:none;"<?php }?>>
                        <span class="gray">Meta Keywords:</span> <span class="val"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_keywords'], ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                    </span>
                    <span  id="b-post-edit-meta-description" <?php if (!$_smarty_tpl->tpl_vars['post']->value['meta_description']){?>style="display:none;"<?php }?>>
                        <span class="gray" >Meta Description:</span> <span class="val"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_description'], ENT_QUOTES, 'UTF-8', true);?>
</span><br>
                    </span>
                    <span id="b-post-edit-custom-params" <?php if (!$_smarty_tpl->tpl_vars['params']->value){?>style="display:none;"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
<br><?php } ?>
                    </span>
                    <span class="gray" id="b-post-edit-no-meta" <?php if ($_smarty_tpl->tpl_vars['post']->value['meta_title']||$_smarty_tpl->tpl_vars['post']->value['meta_keywords']||$_smarty_tpl->tpl_vars['post']->value['meta_description']||$_smarty_tpl->tpl_vars['params']->value){?>style="display:none;"<?php }?>>Для этой записи мета-параметры не заданы.</span>
                    <a href="#" id="b-post-edit-custom-params-link" class="nowrap">Редактировать</a>
                </p>
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                    <?php /*  Call merged included template "./../../dialogs/postEditCustomParams.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./../../dialogs/postEditCustomParams.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f00605f3da1_53889549($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postEditCustomParams.html" */?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            </div>

            
            <!-- plugin hook: "backend_post_edit.*.sidebar" -->
            <?php if (isset($_smarty_tpl->tpl_vars['backend_post_edit']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_post_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?>
                        <!-- begin backend.post_edit.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.sidebar -->
                            <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

                        <!-- end <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
 -->
                    <?php }?>
                <?php } ?>
            <?php }?>
            <!-- end plugin hook: "backend_post_edit.*.sidebar" -->

            <!-- actions -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['id']){?>
                <div class="block">
                    <ul class="menu-v with-icons compact">
                        <li><a href="#" class="dialog-confirm" id="postdelete-dialog-confirm"><i class="icon16 delete"></i>Удалить запись</a></li>
                    </ul>
                </div>
            <?php }?>

        </div>
    </div>

    <div class="content right200px">

        <div class="b-stream b-single-post">
            <div class="b-stream-title" style="padding-left: 20px;">
                <div class="float-right">
                    <a href="#" id="realtime-preview-toggle" title="Режим параллельного редактирования"></a>
                </div>
                <ul class="menu-h dropdown" id="blogs-list">
                    <li>Блог:</li>
                    <li class="b-stream-title-drop">
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['post']->value['blog_id'];?>
" class="inline-link current-blog">
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->tpl_vars['post']->value['blog_id']]['icon_html'])===null||$tmp==='' ? '' : $tmp);?>

                            <b><i><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->tpl_vars['post']->value['blog_id']]['name'], ENT_QUOTES, 'UTF-8', true),32);?>
</i></b>
                            <?php if ($_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->tpl_vars['post']->value['blog_id']]['status']==blogBlogModel::STATUS_PRIVATE){?><i class="icon10 lock-bw no-overhanging"></i><?php }?>
                            <input type="hidden" name="blog_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['blog_id'];?>
">
                            <i class="icon10 darr"></i>
                        </a>

                        <!-- jquery template <?php $_smarty_tpl->_capture_stack[0][] = array("selected-blog-template-js", null, null); ob_start(); ?> -->
                            <a href="#${blog.id}" class="inline-link current-blog">
                                {{html blog.icon_html}}
                                <b><i>{{if blog.name.length > 32}}${blog.name.substring(0, 29)}...{{else}}${blog.name}{{/if}}</i></b>
                                {{if (blog.status == '<?php echo blogBlogModel::STATUS_PRIVATE;?>
')}}<i class="icon10 lock-bw no-overhanging"></i>{{/if}}
                                <input type="hidden" name="blog_id" value="${blog.id}">
                                <i class="icon10 darr"></i>
                            </a>
                        <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                        <?php if ($_smarty_tpl->tpl_vars['allow_change_blog']->value){?>
                            <ul class="menu-v">
                                <?php  $_smarty_tpl->tpl_vars['blog_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog_']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog_']->key => $_smarty_tpl->tpl_vars['blog_']->value){
$_smarty_tpl->tpl_vars['blog_']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['blog_']->key;
?><?php if ($_smarty_tpl->tpl_vars['blog_']->value['rights']>=blogRightConfig::RIGHT_READ_WRITE){?>
                                    <li id="blog-selector-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['blog']->value['id']){?>selected<?php }?>" data-blog-status="<?php if ($_smarty_tpl->tpl_vars['blog_']->value['status']==blogBlogModel::STATUS_PRIVATE){?>private<?php }else{ ?>public<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['blog_']->value['color']!='b-white'){?><span class="count"><i class="icon10 color <?php echo $_smarty_tpl->tpl_vars['blog_']->value['color'];?>
"></i></span><?php }?>
                                        <a href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="inline-link change-blog">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['blog_']->value['icon_html'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['blog_']->value['name'], ENT_QUOTES, 'UTF-8', true),32);?>
<?php if ($_smarty_tpl->tpl_vars['blog_']->value['status']==blogBlogModel::STATUS_PRIVATE){?> <i class="icon10 lock-bw no-overhanging"></i><?php }?>
                                        </a>
                                    </li>
                                <?php }?><?php } ?>
                            </ul>
                        <?php }?>
                    </li>
                </ul>
            </div>

            <div class="block double-padded b-post b-bottom-extra-padded <?php echo $_smarty_tpl->tpl_vars['blog']->value['color'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['post']->value['id'])&&$_smarty_tpl->tpl_vars['post']->value['id']){?> id="b-post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"<?php }?> style="position: static;">

                <input id="post-title" name="title" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="b-post-title" maxlength="255" placeholder="Заголовок">
                <br>

                

                <?php $_smarty_tpl->tpl_vars["is_adding"] = new Smarty_variable(($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DRAFT&&!$_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["unsuccessful_save"] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['validate_messages']->value['url'])&&$_smarty_tpl->tpl_vars['validate_messages']->value['url']), null, 0);?>

                <div id="post-url-field-no-settlements" class="hidden no-settlements">
                    <p class="small" style="line-height: 1.0em;">
                        Записи в этом блоге не видны пользователям фронтенда, потому что для приложения «Блог» не заданы правила маршрутизации. Поселите «Блог» в настройках маршрутизации приложения «Сайт», чтобы начать публиковать записи нового блога.
                    </p>
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['no_settlements']->value){?>
                    <div id="post-url-field" <?php if (($_smarty_tpl->tpl_vars['blog']->value['status']==blogBlogModel::STATUS_PRIVATE&&!$_smarty_tpl->tpl_vars['unsuccessful_save']->value)||($_smarty_tpl->tpl_vars['is_adding']->value&&strlen(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true))==0&&!$_smarty_tpl->tpl_vars['unsuccessful_save']->value)){?>style="display:none;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['no_settlements']->value){?>class="no-settlements"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_PUBLISHED){?>
                        <i class="icon10 yes"></i>
                        <span class="small">Опубликовано:
                        <?php }else{ ?>
                        <span class="<?php if ($_smarty_tpl->tpl_vars['is_adding']->value){?>small<?php }else{ ?>hint<?php }?>">Предварительный просмотр:
                        <?php }?>
                            <span id="url-editable" <?php if ($_smarty_tpl->tpl_vars['is_adding']->value||$_smarty_tpl->tpl_vars['unsuccessful_save']->value){?>style="display:none;"<?php }?>>
                                <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['link'], null, 0);?>
                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['link']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php echo "/";?><?php if (isset($_smarty_tpl->tpl_vars['preview_hash']->value)){?><?php echo "?preview=";?><?php echo (string)$_smarty_tpl->tpl_vars['preview_hash']->value;?><?php }?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['full_link'] = new Smarty_variable($_tmp1, null, 0);?>
                                <a id="url-link" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['full_link']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
<span class="slug"><?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span></a>
                                <a id="url-edit-link" href="javascript:void(0);" class="inline-link inline-edit"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                            </span>
                            <span id="url-edit" <?php if (!$_smarty_tpl->tpl_vars['is_adding']->value&&!$_smarty_tpl->tpl_vars['unsuccessful_save']->value){?>style="display:none;"<?php }?>>
                                <span id="pure-url"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
</span><input type="text" id="post-url" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['validate_messages']->value)&&!empty($_smarty_tpl->tpl_vars['validate_messages']->value)){?>class="error"<?php }?>>/
                            </span>
                        </span>

                        <div id="other-urls">
                            <?php if (isset($_smarty_tpl->tpl_vars['post']->value['other_links'])&&!empty($_smarty_tpl->tpl_vars['post']->value['other_links'])){?>
                                <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['other_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                                    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['link']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php echo "/";?><?php if (isset($_smarty_tpl->tpl_vars['preview_hash']->value)){?><?php echo "?preview=";?><?php echo (string)$_smarty_tpl->tpl_vars['preview_hash']->value;?><?php }?><?php }?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['full_link'] = new Smarty_variable($_tmp2, null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_PUBLISHED){?>
                                        <i class="icon10 yes"></i>
                                        <span class="small">Опубликовано:
                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['full_link']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8', true);?>
<span class="slug"><?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span></a>
                                        </span>
                                    <?php }elseif($_smarty_tpl->tpl_vars['is_adding']->value){?>
                                        <span class="small">Предварительный просмотр:
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8', true);?>
<span class="slug"><?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span>
                                        </span>
                                    <?php }else{ ?>
                                        <span class="hint">Предварительный просмотр:
                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['full_link']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8', true);?>
<span class="slug"><?php if ($_smarty_tpl->tpl_vars['post']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span></a>
                                        </span>
                                    <?php }?>
                                    <br>
                                <?php } ?>
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['unsuccessful_save']->value){?>
                            <div id="message-post-url" class="hint errormsg"><?php echo $_smarty_tpl->tpl_vars['validate_messages']->value['url'];?>
</div>
                        <?php }else{ ?>
                            <div id="message-post-url" class="hint"></div>
                        <?php }?>

                    </div>
                <?php }?> 

                

                
                <!-- plugin hook: "backend_post_edit.*.toolbar" -->
                <?php if (isset($_smarty_tpl->tpl_vars['backend_post_edit']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_post_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['output']->value['toolbar'])){?>
                            <!-- begin backend_post_edit.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.toolbar -->
                                <?php echo $_smarty_tpl->tpl_vars['output']->value['toolbar'];?>

                            <!-- end <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
 -->
                        <?php }?>
                    <?php } ?>
                <?php }?>
                <!-- end plugin hook: "backend_post_edit.*.toolbar" -->
            </div>

            <div class="b-post-editor" id="post-editor">
                <ul class="b-post-editor-toggle">
                    <li>
                        <a id="redactor" href="javascript:void(0);">Визуальный редактор</a>
                    </li>
                    <li>
                        <a id="ace" href="javascript:void(0);">HTML</a>
                    </li>

                    
                    <!-- plugin hook: "backend_post_edit.*.editor_tab" -->
                    <?php if (isset($_smarty_tpl->tpl_vars['backend_post_edit']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_post_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['output']->value['editor_tab'])){?>
                                <li>
                                    <!-- begin backend_post_edit.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.toolbar -->
                                        <?php echo $_smarty_tpl->tpl_vars['output']->value['editor_tab'];?>

                                    <!-- end <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
 -->
                                </li>
                            <?php }?>
                        <?php } ?>
                    <?php }?>
                    <!-- end plugin hook: "backend_post_edit.*.editor_tab"-->

                    <?php if (blogPhotosBridge::isAvailable()){?>
                        <li>
                            <a id="photo_bridge" href="javascript:void(0);">
                                Фотоальбом
                                <i class="icon10 yes show-when-album-selected" style="<?php if (empty($_smarty_tpl->tpl_vars['post']->value['album_id'])){?>display:none;<?php }?>"></i>
                            </a>
                        </li>
                    <?php }?>
                </ul>
                <textarea id="post_text" name="text" cols="60" rows="20" style="border:0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <div  class="b-post-editor-wrapper" id="post_text_wrapper">
                    <?php if (blogPhotosBridge::isAvailable()){?>
                        <div id="blog-photo_bridge-editor" class="hidden">
                            <div class="double-padded block">
                                <div class="fields">
                                    <div class="field">
                                        <div class="name">Прикрепить фотоальбом</div>
                                        <div class="value">
                                            <i class="icon16 pictures"></i>
                                            <select name="album_id">
                                                <option></option>
                                                <?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_upload_album_menu')) {
    function smarty_template_function_upload_album_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['upload_album_menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['a']->value['parent_id']==$_smarty_tpl->tpl_vars['parent']->value){?>
                                                          <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['post']->value['album_id']==$_smarty_tpl->tpl_vars['a']->value['id']){?> selected<?php }?> data-frontend-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['frontend_link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['parent']->value){?><?php echo str_repeat('-',$_smarty_tpl->tpl_vars['level']->value);?>
&nbsp;<?php }?><?php echo smarty_modifier_truncate(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? '(без названия)' : $tmp), ENT_QUOTES, 'UTF-8', true),64);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['status']!=1){?> (закрытый альбом)<?php }?></option>
                                                          <?php smarty_template_function_upload_album_menu($_smarty_tpl,array('parent'=>$_smarty_tpl->tpl_vars['a']->value['id'],'level'=>($_smarty_tpl->tpl_vars['level']->value+1)));?>

                                                        <?php }?>
                                                    <?php } ?>
                                                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                                <?php smarty_template_function_upload_album_menu($_smarty_tpl,array());?>

                                            </select>
                                            <p class="hint">Фотографии из выбранного альбома будут автоматически добавлены после содержимого записи. Описания и порядок сортировки фотографий определяется приложением «Фото».</p>
                                        </div>
                                    </div>
                                    <div class="hidden field">
                                        <div class="name">Адрес записи</div>
                                        <div class="value">
                                            <label>
                                                <input type="hidden" name="album_link_type" value="blog">
                                                <input type="checkbox" name="album_link_type" value="photos"<?php if ($_smarty_tpl->tpl_vars['post']->value['album_link_type']=='photos'){?> checked<?php }?>>
                                                Заменить прямой ссылкой на фотоальбом
                                                <strong id="album-frontend-link" class="hint"></strong>
                                                <p class="hint">Содержимое записи будет опубликовано в общей ленте и в RSS как обычно, однако основная ссылка на запись будет заменена прямой ссылкой на выбранный фотоальбом в фотогалерее (в поселении приложения «Фото»).</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear-left"></div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div> 

            <div class="block double-padded b-post <?php echo $_smarty_tpl->tpl_vars['blog']->value['color'];?>
" id="buttons-bar">
                <?php if (($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DRAFT)||($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DEADLINE)){?>
                    <div id="b-post-draft-settings">
                        <div class="float-right b-aux-link">
                            <i class="icon16 clock"></i>
                            <a id="schedule-edit" href="javascript:void(0);" class="no-underline dialog-edit">Отложенная публикация</a>
                        </div>
                        <?php if (($_smarty_tpl->tpl_vars['allow_change_blog']->value>1)&&($_smarty_tpl->tpl_vars['post']->value['status']!=blogPostModel::STATUS_PUBLISHED)){?>
                            <input id="postpublish-edit" type="button" class="button green dialog-edit" value="Опубликовать" >
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                                <?php /*  Call merged included template "./../../dialogs/postPublish.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postPublish.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f0060e75c44_01318323($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postPublish.html" */?>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php }else{ ?>
                            <input id="b-post-save-button" type="button" class="button green" name="published" value="Опубликовать" >
                        <?php }?>
                        <input id="b-post-save-draft-button" type="button" class="button grey" name="<?php if ($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_DEADLINE){?>deadline<?php }else{ ?>draft<?php }?>" value="Сохранить черновик" >
                        <span class="hint">Ctrl+S</span>
                        <span id="form-status">
                            <span id="saved-status" style="display: none;">
                                <i class="icon16 b-post-save-indicator yes"></i>Сохранено
                            </span>
                            <span id="loading-status" style="display: none;">
                                <i class="icon16 b-post-save-indicator loading"></i>
                            </span>
                        </span>
                    </div>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                        <?php /*  Call merged included template "./../../dialogs/postSchedule.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postSchedule.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f00610291e2_31391339($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postSchedule.html" */?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }else{ ?>
                    <div id="b-post-public-settings">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['status']!=blogPostModel::STATUS_PUBLISHED){?>
                            <div class="block">
                                <i class="icon16 clock"></i>
                                Автоматическая публикация запланирована на
                                <strong><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'humandatetime');?>
</strong>
                                <span class="hint">(<?php echo $_smarty_tpl->tpl_vars['post']->value['remaining_time'];?>
)</span>
                            </div>
                        <?php }?>

                        <div class="float-right b-aux-link">
                            <i class="icon10 no-bw"></i>
                            <a name="unpublish" href="#unpublish" class="no-underline js-submit" title="Отменить публикацию записи?">Отменить публикацию</a>
                        </div>
                        <input id="b-post-save-button" type="button" class="button green" name="<?php if ($_smarty_tpl->tpl_vars['post']->value['status']==blogPostModel::STATUS_SCHEDULED){?>scheduled<?php }else{ ?>published<?php }?>" value="Сохранить" >
                        <span class="hint">Ctrl+S</span>
                        <span id="form-status">
                            <span id="saved-status" style="display: none;">
                                <i class="icon16 b-post-save-indicator yes"></i>Сохранено
                            </span>
                            <span id="loading-status" style="display: none;">
                                <i class="icon16 b-post-save-indicator loading"></i>
                            </span>
                        </span>
                    </div>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
                        <?php /*  Call merged included template "./../../dialogs/postDelete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postDelete.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2071082865a8c024090a959-15566757');
content_5a8f006045a9c8_90893691($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postDelete.html" */?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }?>

                <div class="clear-left"></div>
            </div> 

        </div> 

        <input type="hidden" id="post-id" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">

    </div> 

    <?php if (isset($_smarty_tpl->tpl_vars['dialogs']->value)){?>
        <!-- dialog begin -->
        <?php  $_smarty_tpl->tpl_vars['dialog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dialog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dialogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dialog']->key => $_smarty_tpl->tpl_vars['dialog']->value){
$_smarty_tpl->tpl_vars['dialog']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>

        <?php } ?>
        <!-- dialog end -->
    <?php }?>

</form>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/elrte/elrte.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/elrte/elrte-wa.css">
<script type="text/javascript">
    $.wa.locale['Post cut'] = "Кат (Читать далее &rarr;)";
    $.wa.locale['Image will be uploaded into'] = "Изобажение будет загружено в директорию";
</script>
<?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
<?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/redactor_plugins.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/redactor.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/elrte/elrte.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/elrte/i18n/elrte.<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"></script>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/elrte/elrte-wa.js"></script>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/blog-post-edit.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/blog-post-edit.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/postmessage.js
    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/postEdit.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/blog-post-edit.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script type="text/javascript">
    var wa_url = "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
";
    var wa_lang = "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
    var wa_img_upload_path = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->dataUrl('img');?>
";
    $.wa.locale = $.extend($.wa.locale, {
        "Upload": "Загрузить",
        "Select from Photos app": "Выбрать из «Фото»",
        "Insert": "Вставить",
        "Total photos selected:": "Выбрано фотографий:",
        "Photos from the attached album will be displayed here.":"Здесь будут показаны фотографии из прикрепленного фотоальбома.",
        'input_maxlength':<?php echo json_encode('Максимум %d символов');?>

    });
    $.wa_blog_options = $.extend(true, $.wa_blog_options, {
        'photos_bridge_available': <?php echo json_encode(blogPhotosBridge::isAvailable());?>
,
        'editor': {
            'blogs':<?php echo json_encode($_smarty_tpl->tpl_vars['blogs']->value);?>
,
            'current_blog_id':<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
,
            'editor_id':'post_text',
            'wa_url':"<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
",
            'wa_app_static_url':"<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
",
            'cut_link_label_default': "Читать далее →",
            'version':'<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
'
        }
    });

    $('#post_text').data('uploadFields', {
        '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
    });

    <?php if (waRequest::request('realtime_on')){?>
        $(function() {
            $('#realtime-preview-toggle').click();
        });
    <?php }?>
</script>

<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
<?php if (strpos($_smarty_tpl->tpl_vars['name']->value,'template-js')){?>
<script type="text/x-jquery-tmpl" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<!-- begin <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value,'</','<\/');?>
 end <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->
</script>
<?php }?>
<?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postDeadline.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8f00603fb6f1_34332622')) {function content_5a8f00603fb6f1_34332622($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><div class="dialog width400px height200px" id="deadline-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <h1>Срок публикации</h1>
        <div class="datetime">
          <i class="icon16 exclamation" style="margin-top: 0.3em;"></i>
          <input class="datepicker" disabled="disabled" name="datetime[]" type="text" 
                     value="<?php if ($_smarty_tpl->tpl_vars['post']->value['datetime']){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['post']->value['datetime']);?>
<?php }elseif($_smarty_tpl->tpl_vars['wa']->value->get('date')){?><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['wa']->value->get('date')));?>
<?php }?>" 
                     size="8">
        </div>
        
        <span class="hint">(<span class="user-date-format"><!-- format placeholder --></span> формат)</span>
        <br><br>
        <p class="hint">Установка срока публикации используется только для планирования. Запись автоматически не публикуется, а лишь выделяется в календаре после истечения даты публикации.</p>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="button" name="deadline" class="button green" value="Сохранить">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postDelete.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8f006045a9c8_90893691')) {function content_5a8f006045a9c8_90893691($_smarty_tpl) {?><div class="dialog" id="postdelete-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window" style="height: 180px; min-height: 180px; width: 400px; min-width: 400px">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value){?>
          <h1>Удалить запись</h1>
          <p><?php echo sprintf('Запись «<b>%s</b>» будет удалена без возможности восстановления. Удалить?',htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post']->value['title'])===null||$tmp==='' ? '(нет заголовка)' : $tmp), ENT_QUOTES, 'UTF-8', true));?>
</p>
        <?php }else{ ?>
          <h1>Удалить записи</h1>
          <p>Выбранные записи будут удалены без возможности восстановления. Удалить?</p>
        <?php }?>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="button" name="delete" class="button red" value="Удалить">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postEditCustomParams.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8f00605f3da1_53889549')) {function content_5a8f00605f3da1_53889549($_smarty_tpl) {?><div class="dialog width650px" id="b-post-edit-custom-params-dialog">
  <div class="dialog-background"></div>
  <div class="dialog-window">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <div class="fields form">
            <div class="field">
                <div class="name"><strong>Заголовок</strong> <span class="hint">&lt;title&gt;</span></div>
                <div class="value">
                    <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
" id="b-post-meta-title"
                                name="meta_title" 
                                class="long bold">
                </div>
            </div>
            <div class="field">
                <div class="name">Meta Keywords</div>
                <div class="value no-shift">
                    <textarea name="meta_keywords" style="height: 40px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_keywords'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>
            </div>
            <div class="field">
                <div class="name">Meta Description</div>
                <div class="value no-shift">
                    <textarea name="meta_description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>
            </div>
            <div class="field">
                <div class="name">Дополнительные параметры</div>
                <div class="value no-shift">
                    <textarea name="params" id="post-custom-parameters" style="height: 100px;"><?php if ($_smarty_tpl->tpl_vars['params']->value){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php } ?><?php }?></textarea>
                    <span class="hint">Необязательный набор дополнительных параметров <em>key=value</em> (используются в шаблоне общедоступной части в виде <em>&#123;$post.key&#125;</em>). Каждую пару key=value указывайте с новой строки.</span>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="button" class="button green" value="Сохранить" id="b-post-save-custom-params">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div>
<script>
$(function() {
    /**
    * Make input (or textarea) with field_id flexible, 
    * what means that depends on length and threshold this field turn into input or textarea and back
    * 
    * @param String field_id
    * @param Number threshold (default 50)
    */
    function makeFlexibleInput(field_id, threshold) {
        var timeout = 250;
        threshold = threshold || 50;
        var height = 45;
        var timer_id = null;
        field_id = '#' + field_id;
        var field = $(field_id);

        var onFocus = function() {
            this.selectionStart = this.selectionEnd = this.value.length;
        };
        var handler = function() {
            if (timer_id) {
                clearTimeout(timer_id);
                timer_id = null;
            }
            timer_id = setTimeout(function() {
                var val = field.val();
                if (val.length > threshold && field.is('input')) {
                    var textarea = input2textarea(field);
                    textarea.css('height', height);
                    field.replaceWith(textarea);
                    field = textarea;
                    field.focus();
                } else if (val.length <= threshold && field.is('textarea')) {
                    var input = textarea2input(field);
                    input.css('height', '');
                    field.replaceWith(input);
                    field = input;
                    field.focus();
                }
            }, timeout);
        };

        var p = field.parent();
        p.off('keydown', field_id).
            on('keydown',  field_id, handler);
        p.off('focus',    field_id).
            on('focus',     field_id, onFocus);

        // initial shot
        handler();
    }
    
    function input2textarea(input) {
        var p = input.parent();
        var rm = false;
        if (!p.length) {
            p = $('<div></div>');
            p.append(input);
            rm = true;
        }
        var val = input.val();

        var html = p.html();
        html = html.replace(/value(\s*?=\s*?['"][\s\S]*?['"])*/, '');
        html = html.replace(/type\s*?=\s*?['"]text['"]/, '');
        html = html.replace('input', 'textarea');
        html = html.replace(/(\/\s*?<?php ?>>|>)/, '>' + val  + '</textarea>');

        if (rm) {
            p.remove();
        }

        return $(html);
    };
                
    function textarea2input(textarea) {
        var p = textarea.parent();
        var rm = false;
        if (!p.length) {
            p = $('<div></div>');
            p.append(textarea);
            rm = true;
        }
        var val = textarea.val();

        var html = p.html();
        html = html.replace('textarea', 'input type="text" value="' + val + '"');
        html = html.replace('</textarea>', '');

        if (rm) {
            p.remove();
        }

        return $(html);
    }
    
    makeFlexibleInput('b-post-meta-title');
    
});
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:44
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postPublish.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8f0060e75c44_01318323')) {function content_5a8f0060e75c44_01318323($_smarty_tpl) {?><div class="dialog width300px height300px" id="postpublish-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window" style="width: 500px; min-width: 350px">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <h1>Подтвердите выбор блога</h1>
        <ul class="menu-v">
          <?php  $_smarty_tpl->tpl_vars['blog_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog_item']->_loop = false;
 $_smarty_tpl->tpl_vars['blog_item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog_item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog_item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['blog_item']->key => $_smarty_tpl->tpl_vars['blog_item']->value){
$_smarty_tpl->tpl_vars['blog_item']->_loop = true;
 $_smarty_tpl->tpl_vars['blog_item_id']->value = $_smarty_tpl->tpl_vars['blog_item']->key;
 $_smarty_tpl->tpl_vars['blog_item']->iteration++;
 $_smarty_tpl->tpl_vars['blog_item']->last = $_smarty_tpl->tpl_vars['blog_item']->iteration === $_smarty_tpl->tpl_vars['blog_item']->total;
?>
          <?php if ($_smarty_tpl->tpl_vars['blog_item']->value['rights']>=blogRightConfig::RIGHT_READ_WRITE){?>
          <li>
            <input type="radio" name="publish_blog_id" value="<?php echo $_smarty_tpl->tpl_vars['blog_item_id']->value;?>
" id="b-post-publish-blog-<?php echo $_smarty_tpl->tpl_vars['blog_item_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['blog_item']->value['id']==$_smarty_tpl->tpl_vars['post']->value['blog_id']){?> checked="checked"<?php }?>>
            &nbsp;
            <label for="b-post-publish-blog-<?php echo $_smarty_tpl->tpl_vars['blog_item_id']->value;?>
">
                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['blog_item']->value['icon_html'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if ($_smarty_tpl->tpl_vars['blog_item']->value['status']==blogBlogModel::STATUS_PRIVATE){?><i class="icon10 lock-bw no-overhanging"></i><?php }?>
            </label>
            <?php if (!$_smarty_tpl->tpl_vars['blog_item']->last){?><br><?php }?>
          </li>
          <?php }?><?php } ?>
        </ul>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input id="b-post-save-button" type="button" class="button green" name="published" value="Опубликовать" >
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-22 17:39:45
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/templates/dialogs/postSchedule.html" */ ?>
<?php if ($_valid && !is_callable('content_5a8f00610291e2_31391339')) {function content_5a8f00610291e2_31391339($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?>
<div class="dialog width400px height300px" id="schedule-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window">
    <div class="dialog-content">
      <div class="dialog-content-indent">

        <h1>Отложенная публикация</h1>

        <br>
        <div class="datetime">
          <i class="icon16 clock" style="margin-top: 0.3em;"></i>
          <?php $_smarty_tpl->tpl_vars["show_date"] = new Smarty_variable(smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'U')>=smarty_modifier_wa_datetime(smarty_modifier_date_format(time(),'Y-m-d'),'U'), null, 0);?>
          <input class="datepicker" name="schedule_datetime[]" type="text" disabled="disabled" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['datetime']&&$_smarty_tpl->tpl_vars['show_date']->value){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['post']->value['datetime']);?>
<?php }?>" size="8">&nbsp;
          <input type="text" name="schedule_datetime[]" class="time" disabled="disabled" value="<?php if ($_smarty_tpl->tpl_vars['show_date']->value&&$_smarty_tpl->tpl_vars['post']->value['datetime']){?><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'H');?>
<?php }else{ ?>10<?php }?>" size="2" maxlength="2" autocomplete="off">:<input type="text" data-role="datetime_minutes" disabled="disabled" name="schedule_datetime[]" class="time" value="<?php if ($_smarty_tpl->tpl_vars['show_date']->value&&$_smarty_tpl->tpl_vars['post']->value['datetime']){?><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],'i');?>
<?php }else{ ?>00<?php }?>" size="2" maxlength="2" autocomplete="off">
        </div>

        <span class="hint">(<span class="user-date-format"><!-- format placeholder --></span> формат, текущее время: <span class="current-user-time"><?php echo smarty_modifier_wa_date(time(),'time');?>
</span>)</span>

        <br><br>

        <p class="hint<?php if (!$_smarty_tpl->tpl_vars['cron_schedule_time']->value&&!$_smarty_tpl->tpl_vars['last_schedule_cron_time']->value){?> b-cron-error<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cron_schedule_time']->value||$_smarty_tpl->tpl_vars['last_schedule_cron_time']->value){?>
          <i class="icon10 yes"></i>
          <?php if ($_smarty_tpl->tpl_vars['last_schedule_cron_time']->value){?>
              <?php echo sprintf('CRON для отложенной публикации записей включен и работает. Время последнего запуска: <strong>%s</strong>',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['last_schedule_cron_time']->value,'humandatetime'));?>

          <?php }else{ ?>
              <?php echo sprintf('CRON для отложенной публикации записей включен и работает. Время последнего запуска: <strong>%s</strong>',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['cron_schedule_time']->value,'humandatetime'));?>

          <?php }?>
        <?php }else{ ?>
          <i class="icon10 no"></i>
          <span class="red"><?php echo sprintf('Для работы запланированной публикации необходимо настроить CRON, что позволит приложению «Блог» выполнять действия по расписанию без участия пользователя. Инструкция для CRON (<a href="http://www.webasyst.ru/developers/docs/tips/cron/" target="_blank">документация по настройке</a>):<br /><br /> <strong class="cron-command">%s</strong>',$_smarty_tpl->tpl_vars['cron_command']->value);?>
</span>
        <?php }?>
        </p>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="button" name="scheduled" class="button green" value="Запланировать">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div>
<script>
    $(function() {
        $('.cron-command').click(function() {
            var el = $('<input style="font-weight: bold; margin-top:2px; border: 1px solid #ccc; color: red; padding: 1px; width:' + ($(this).width() + 2) + 'px" type="text" readonly="readonly" />').val($(this).text()).focus(function () {
                $(this).select();
            }).mouseup(function(e){
                e.preventDefault();
            });
            $(this).replaceWith(el);
            el.select();
        });
    });
</script><?php }} ?>