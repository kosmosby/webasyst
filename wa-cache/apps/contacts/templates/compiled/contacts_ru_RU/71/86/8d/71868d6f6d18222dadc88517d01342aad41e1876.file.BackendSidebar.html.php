<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:06:13
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/backend/BackendSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:16597303585a7ff975a0f6a0-52833107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71868d6f6d18222dadc88517d01342aad41e1876' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/contacts/templates/actions/backend/BackendSidebar.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16597303585a7ff975a0f6a0-52833107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'show_create' => 0,
    'categories' => 0,
    'history' => 0,
    'totalContacts' => 0,
    'superadmin' => 0,
    'c' => 0,
    'wa_url' => 0,
    'totalUsers' => 0,
    'backend_sidebar' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ff975bbd1d4_32088507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ff975bbd1d4_32088507')) {function content_5a7ff975bbd1d4_32088507($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['admin']->value)||(!empty($_smarty_tpl->tpl_vars['show_create']->value)&&!empty($_smarty_tpl->tpl_vars['categories']->value))){?>
    <div class="block" id="add-new-contact-block">
        <a href="#/contacts/add/" class="bold no-underline">
            <i class="icon16 add"></i>Новый контакт
        </a>
    </div>
<?php }?>


<div class="block wrapper" style="display:none">
    <span class="count"><a href="#" class="hint c-search-close" onclick="return $.wa.history.clear('creation')" title="очистить"><i class="icon10 close"></i></a></span>
    <h5 class="heading">Недавно добавлены</h5>
    <ul class="menu-v with-icons compact" id="wa-creation-history">
        
    </ul>
</div>


<form id="search-form">
    <div class="block">
        <input id="search-text" type="search" class="search-input-only" value="" placeholder="поиск по имени или email" />
    </div>
</form>

<div class="block wrapper" style="display:none">
    <span class="count"><a href="#" class="hint c-search-close" onclick="return $.wa.history.clear('search')" title="очистить"><i class="icon10 close"></i></a></span>
    <h5 class="heading">Недавние поиски</h5>
    <ul class="menu-v with-icons compact" id="wa-search-history">
        
    </ul>
</div>
<script>
    $('#search-form').submit(function() {
        $.wa.controller.simpleSearch();    
        return false;
    });
    <?php if (!empty($_smarty_tpl->tpl_vars['history']->value)){?>
        $(function() {
            $.wa.history.updateHistory(<?php echo json_encode($_smarty_tpl->tpl_vars['history']->value);?>
);
        });
    <?php }?>
</script>

<div class="block">    
    <ul class="menu-v with-icons compact">
        <li id="sb-all-contacts-li">
            <span class="count"><?php echo $_smarty_tpl->tpl_vars['totalContacts']->value;?>
</span>
            <a class="bold" href="#/"><i class="icon16 contact"></i><b class="c-item-bold">Все контакты</b></a>
        </li>
    </ul>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)||!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
            <span class="count c-action-link"><a href="#/categories/create/" title="Новая категория"><i class="icon16 add"></i></a></span>
        <?php }?>
        <h5 class="heading collapse-handler" id="c-sb-categories-header"><i class="icon16 darr"></i><b>Категории</b></h5>
        <ul class="menu-v with-icons collapsible" id="list-category">
            <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                     <li rel="category<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                         <span class="count"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnt'];?>
</span>
                         <a href="#/contacts/category/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
/">
                            <?php if (!empty($_smarty_tpl->tpl_vars['c']->value['icon'])&&strpos($_smarty_tpl->tpl_vars['c']->value['icon'],'/')!==false){?>
                                <img class="c-app16x16icon-menu-v" src="<?php if (substr($_smarty_tpl->tpl_vars['c']->value['icon'],0,4)=='http'){?><?php echo $_smarty_tpl->tpl_vars['c']->value['icon'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value['icon'];?>
<?php }?>" />
                            <?php }else{ ?>
                                <i class="icon16 <?php echo ifempty($_smarty_tpl->tpl_vars['c']->value['icon'],'contact');?>
"></i>
                            <?php }?>
                            <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b>
                        </a>
                     </li>
                <?php } ?>
            <?php }else{ ?>
                <li class="hint" style="padding:0">
                    Категории служат для классификации контактов, например: клиенты, поставщики, партнеры и т.д.
                </li>
            <?php }?>
        </ul>
    <?php }?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['superadmin']->value)){?>
    <div class="block">
        
        <ul class="menu-v with-icons compact">
            <li id="sb-all-users-li">
                <span class="count"><?php if (!empty($_smarty_tpl->tpl_vars['totalUsers']->value)){?><?php echo $_smarty_tpl->tpl_vars['totalUsers']->value;?>
<?php }else{ ?>0<?php }?></span>
                <a class="bold" href="#/users/all/"><i class="icon16 user"></i><b class="c-item-bold">Пользователи</b></a>
            </li>
        </ul>
    </div>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

    <?php }?>
<?php } ?>

<div class="block c-sidebar-indent"></div>
<?php }} ?>