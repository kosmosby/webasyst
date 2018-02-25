<?php /* Smarty version Smarty-3.1.14, created on 2018-02-25 14:51:59
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/magasin/MagasinEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:5101079595a8efdd99b2021-30420654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e20c65652b0d50496933078dc34592579ed8c2b6' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/templates/actions/magasin/MagasinEdit.html',
      1 => 1519570316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5101079595a8efdd99b2021-30420654',
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
  'unifunc' => 'content_5a8efdd9a2c151_38592920',
  'variables' => 
  array (
    'wa' => 0,
    'title' => 0,
    'magasin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8efdd9a2c151_38592920')) {function content_5a8efdd9a2c151_38592920($_smarty_tpl) {?><form id="post-form" action="magasins/?module=magasin&action=save"  method="post">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


    <div class="content right200px">

        <div class="b-stream b-single-post">
            <div class="b-stream-title" style="padding-left: 20px;">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </div>

            <div class="block double-padded b-post b-bottom-extra-padded " style="position: static;">

                <input name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['magasin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="b-post-title" maxlength="255" placeholder="Название магазина">

                <input name="url" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['magasin']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="b-post-title" maxlength="255" placeholder="Cсылка на магазин">

                <input type="hidden" id="d" name="id" value="<?php echo $_smarty_tpl->tpl_vars['magasin']->value['id'];?>
">

            </div>
            <div class="block double-padded b-post" id="buttons-bar">
                <div id="b-post-public-settings">
                    <input id="b-post-save-button" type="submit" class="button green" name="" value="Сохранить" >
                </div>
            </div>

        </div>

    </div>

</form><?php }} ?>