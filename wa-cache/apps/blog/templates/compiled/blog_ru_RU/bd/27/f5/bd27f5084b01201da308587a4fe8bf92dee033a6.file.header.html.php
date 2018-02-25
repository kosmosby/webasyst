<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:09:57
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/themes/default/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1109090815a7ffa55eb66f1-23447167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd27f5084b01201da308587a4fe8bf92dee033a6' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/blog/themes/default/header.html',
      1 => 1452519786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109090815a7ffa55eb66f1-23447167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'blog_query' => 0,
    'wa' => 0,
    'blog' => 0,
    'is_search' => 0,
    'theme_settings' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ffa56014c66_27496702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ffa56014c66_27496702')) {function content_5a7ffa56014c66_27496702($_smarty_tpl) {?><!-- search -->
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" class="search">
    <div class="search-wrapper">
        <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['blog_query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['blog_query']->value;?>
"<?php }?> placeholder="Найти запись">
        <button type="submit"></button>
    </div>
    <div class="clear-both"></div>
</form>

<ul class="pages">

    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->blogs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
        </li>
    <?php }
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
">Все записи</a>
        </li>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='blog-pages'){?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <li<?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['page']->value['url'])){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a></li>
        <?php } ?>
    <?php }?>
    
</ul>


<?php }} ?>