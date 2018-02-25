<?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:26:08
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/AppsInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:5112962755a7ffe205029a9-22552341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf177f142d0520e3524d8b4917f3a33a3f63b90f' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/actions/apps/AppsInfo.html',
      1 => 1501509103,
      2 => 'file',
    ),
    'd4661a7498a59923ecd327e7981396f22e858494' => 
    array (
      0 => '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5112962755a7ffe205029a9-22552341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'error' => 0,
    'domain' => 0,
    'identity_hash' => 0,
    'promo_id' => 0,
    'wa' => 0,
    'current_url' => 0,
    'page' => 0,
    'screenshot' => 0,
    'changelog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a7ffe20d66d60_60745704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ffe20d66d60_60745704')) {function content_5a7ffe20d66d60_60745704($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_wa_date')) include '/Users/kosmos/Documents/sites/webassist.framework/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><div class="block i-product-page">
<?php if (empty($_smarty_tpl->tpl_vars['app']->value)){?>
    <div class="content">
        <div class="i-breadcrumbs">
            <a href="#/apps/">Все приложения</a>
        </div>
        <h1>Приложение не найдено</h1>
        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
            <p class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
        <?php }?>
    </div>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable("#/apps/".((string)$_smarty_tpl->tpl_vars['app']->value['slug'])."/", null, 0);?>

    <div class="sidebar">
        <div class="i-get-started">

            <!-- action block -->
            <?php if ($_smarty_tpl->tpl_vars['app']->value['installed']){?>

                <!-- already installed -->
                <div class="align-center">
                    <?php if ($_smarty_tpl->tpl_vars['app']->value['commercial']&&empty($_smarty_tpl->tpl_vars['app']->value['purchased'])){?>
                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_expire'])){?>

                            
                            <p class="red"><i class="icon16 no"></i><?php echo sprintf("Лицензия на использование «%s» на домене <strong>%s</strong> истекла %s",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),waDatetime::format('humandate',$_smarty_tpl->tpl_vars['app']->value['license_expire']));?>
</p>
                            <a class="button green" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['renew_url'], ENT_QUOTES, 'UTF-8', true);?>
">Продлить лицензию</a>

                            
                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="buy-instead-of-renew-license-form">
                                <p>
                                    <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
">
                                    <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                                    <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                    <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php }?>
                                    <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                                    или <a href="javascript:void();" onClick="$('#buy-instead-of-renew-license-form').submit();return false;">купить постоянную лицензию</a>
                                </p>
                                <p><?php echo sprintf("Постоянная лицензия позволяет сэкономить на ежемесячных платежах за хостинг (платеж уменьшится на %s).",$_smarty_tpl->tpl_vars['app']->value['lease_price']);?>
</p>
                            </form>

                        <?php }else{ ?>
                            
                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                                <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
">
                                <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                                <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                                <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php }?>
                                <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                                <input type="submit" class="button green" value="Получить лицензию">
                                <p class="red"><i class="icon16 no"></i><?php echo sprintf("Установка и использование «%s» на домене <strong>%s</strong> не лицензирована. Возможность установки обновлений отключена. Купите новую лицензию или подключите приобретенную ранее лицензию «%s» к этой установке Webasyst.",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                            </form>
                        <?php }?>
                    <?php }else{ ?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['app']->value['action']==waInstallerApps::ACTION_UPDATE){?>
                            
                                <form action="?module=update&action=manager" method="post">
                                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                                    <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['vendor'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['app']->value['edition'];?>
<?php }?>">
                                    <input type="submit" class="button blue" value="Обновить"<?php if (!$_smarty_tpl->tpl_vars['app']->value['applicable']){?> disabled="disabled"<?php }?>>
                                    <p>
                                        <?php echo sprintf("Новая версия %s <strong>%s</strong> доступна для установки (сейчас установлена версия %s).",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['app']->value['version'],$_smarty_tpl->tpl_vars['app']->value['installed']['version']);?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['changelog'])){?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
changelog/">Список изменений</a>
                                        <?php }?>
                                    </p>
                                    <?php if (!$_smarty_tpl->tpl_vars['app']->value['applicable']){?>
                                        <div style="display: none">
                                            <p class="hint">Приложение не может быть обновлено</p>
                                            <?php /*  Call merged included template "templates/includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['app']->value), 0, '5112962755a7ffe205029a9-22552341');
content_5a7ffe207036c7_42068168($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/includes/requirements.html" */?>
                                        </div>
                                    <?php }?>

                                </form>
                        <?php }elseif($_smarty_tpl->tpl_vars['app']->value['commercial']){?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_expire'])){?>
                                
                                <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Это лицензионная установка «%s» на домене %s. Лицензия действительна до <strong>%s</strong>.",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['app']->value['license_expire']);?>
</em></p>
                                <a class="button green" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['renew_url'], ENT_QUOTES, 'UTF-8', true);?>
" style="display: inline-block;">Продлить лицензию</a>
                                
                                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="buy-instead-of-renew-license-form">
                                    <p>
                                        <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
">
                                        <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                                        <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                        <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php }?>
                                        <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                                        или <a href="javascript:void();" onClick="$('#buy-instead-of-renew-license-form').submit();return false;">купить постоянную лицензию</a>
                                    </p>
                                    <p><?php echo sprintf("Постоянная лицензия позволяет сэкономить на ежемесячных платежах за хостинг (платеж уменьшится на %s).",$_smarty_tpl->tpl_vars['app']->value['lease_price']);?>
</p>
                                </form>

                            <?php }else{ ?>
                                
                                <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Лицензионная установка «%s» на домене <strong>%s</strong>.",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true));?>
</em></p>

                                <a class="button green" href="https://www.webasyst.com/buy/store/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()=='ru_RU'){?>?locale=ru_RU<?php }?>">Купить еще лицензию</a>

                                <p><?php echo sprintf("Приобретение дополнительных лицензий требуется, если вы используете «%s» более чем на одном доменном имени (<a href='%s' target='_blank'>одна лицензия на домен</a>).",htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true),'http://www.webasyst.ru/help/1199/paid-app-licensing/');?>
</p>
                            <?php }?>
                        <?php }else{ ?>
                            
                            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['reviews']['url'])){?>
                            <p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['reviews']['url'];?>
" class="large bold">Написать отзыв</a>
                                <i class="icon16 new-window"></i>
                            </p>
                            <?php }?>
                            <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Установлена последняя версия «%s»: <strong>%s</strong>",$_smarty_tpl->tpl_vars['app']->value['name'],$_smarty_tpl->tpl_vars['app']->value['installed']['version']);?>
</em></p>
                        <?php }?>
                    <?php }?>
                </div>

            <?php }else{ ?>

                <!-- not installed -->

                <div class="align-center">
                        <?php if ($_smarty_tpl->tpl_vars['app']->value['commercial']&&empty($_smarty_tpl->tpl_vars['app']->value['purchased'])){?>
                            
                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                                <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
">
                                <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                                <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                    <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php }?>
                                <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                                <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                                <input type="submit" class="button green" value="Купить и установить"<?php if (!$_smarty_tpl->tpl_vars['app']->value['applicable']){?> disabled="disabled"<?php }?>>
                            </form>
                            <p><?php echo sprintf('Загрузка и установка «%s» будет произведена автоматически сразу после оплаты.',htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 Если у вас уже есть приобретенная лицензия, щелкните по кнопке выше, чтобы подключить лицензию к этой установке Webasyst.</p>
                        <?php }else{ ?>
                            
                            <form action="?module=update&action=manager" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                                <input type="hidden" name="install" value="1">
                                <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['vendor'];?>
">
                                <input type="submit" class="button green" value="Установить"<?php if (!$_smarty_tpl->tpl_vars['app']->value['applicable']){?> disabled="disabled"<?php }?>>
                            </form>
                            <?php if (empty($_smarty_tpl->tpl_vars['app']->value['commercial'])||empty($_smarty_tpl->tpl_vars['app']->value['lease_price'])||(ifset($_smarty_tpl->tpl_vars['app']->value['lease_price'])=='free')){?>
                                <p><?php echo sprintf('Загрузка и установка «%s» будет произведена автоматически.',htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                            <?php }else{ ?>
                                <p><?php echo sprintf('«%s» будет скачано и установлено бесплатно. После установки вы сможете пользоваться приложением либо оплачивая стоимость аренды ежемесячно, либо купив постоянную лицензию.',htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                            <?php }?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['app']->value['applicable']){?>
                            
                            <p class="hint">Приложение не может быть установлено</p>
                            <?php /*  Call merged included template "templates/includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['app']->value), 0, '5112962755a7ffe205029a9-22552341');
content_5a7ffe207036c7_42068168($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/includes/requirements.html" */?>
                        <?php }?>

                </div>

            <?php }?>

            <!-- pricing -->
            <div class="fields width100px">
                <?php if ($_smarty_tpl->tpl_vars['app']->value['commercial']){?>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Цена
                            </div>
                            <?php if (ifset($_smarty_tpl->tpl_vars['app']->value['lease_price'])=='free'){?>
                                
                                <div class="value">
                                    <?php if ($_smarty_tpl->tpl_vars['app']->value['price']){?><strike><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strike>&nbsp;<?php }?>
                                    <strong>Бесплатно</strong>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['app']->value['price']){?><div class="value italic"><p class="small"><?php echo sprintf('Статус вашего аккаунта позволяет установить «%s» бесплатно!',htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p></div><?php }?>
                            <?php }else{ ?>
                                <div class="value">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?><strike class="gray"><?php echo $_smarty_tpl->tpl_vars['app']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                                    <strong<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['compare_price'])){?> class="discounted large"<?php }?>><?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
</strong>
                                </div>
                                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['lease_price'])){?>
                                    <div class="value">
                                        или
                                    </div>
                                    <div class="value">
                                        <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['app']->value['lease_price']);?>
</strong>
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="field">
                        <div class="name">
                            Цена
                        </div>
                        <div class="value">
                            <strong>Бесплатно</strong>
                        </div>
                    </div>
                <?php }?>
                <div class="field">
                    <div class="name">
                        Лицензия
                    </div>
                    <div class="value">
                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_text'])){?>
                            Коммерческая
                            <a href="#/show/license/" class="js-action">Открыть</a>
                            <div class="dialog">
                                <div class="dialog-background"></div>
                                <div class="dialog-window" style="left: 29%; top: 25%;">
                                    <div class="dialog-content">
                                        <div class="dialog-content-indent">
                                            <h2><?php echo htmlspecialchars(sprintf('Лицензионное соглашения на использование «%s»',$_smarty_tpl->tpl_vars['app']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                            <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['license_text'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                        </div>
                                    </div>
                                    <div class="dialog-buttons">
                                        <div class="block double-padded">
                                            <a href="#/hide/license" class="js-action">Закрыть</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['app']->value['license'])===null||$tmp==='' ? 'Без лицензии' : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['license_url'])){?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['license_url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">Открыть</a> <i class="icon10 new-window"></i><?php }?>
                        <?php }?>

                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Разработчик
                    </div>
                    <div class="value">
                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['app']->value['vendor_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value['vendor'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>

            <div class="clear-both"></div>

        </div>

        <!-- product misc details -->
        <div class="block double-padded">
            <div class="fields width100px">

                <div class="field">
                    <div class="name">
                        Версия
                    </div>
                    <div class="value">
                        <?php echo $_smarty_tpl->tpl_vars['app']->value['version'];?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['changelog'])){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
changelog/" style="font-size: 0.9em;">Список изменений</a>
                        <?php }?>
                    </div>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['demo_url'])){?>
                    <div class="field">
                        <div class="name">
                            Демо
                        </div>
                        <div class="value">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['demo_url'];?>
" target="_blank"><?php echo smarty_modifier_truncate(str_replace('http://','',str_replace('https://','',$_smarty_tpl->tpl_vars['app']->value['demo_url'])),25);?>
</a> <i class="icon10 new-window"></i>
                        </div>
                    </div>
                <?php }?>
                <div class="field">
                    <div class="name">
                        Обновлено
                    </div>
                    <div class="value">
                        <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['app']->value['update_datetime'],'humandate');?>

                    </div>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['url'])){?>
                    <div class="field">
                        <div class="name">
                            Сайт
                        </div>
                        <div class="value">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
"><?php echo smarty_modifier_truncate(str_replace('http://','',str_replace('https://','',$_smarty_tpl->tpl_vars['app']->value['url'])),25);?>
</a> <i class="icon10 new-window"></i>
                        </div>
                    </div>
                <?php }?>
                
            </div>

            <?php if ($_smarty_tpl->tpl_vars['app']->value['installed']){?>
                <?php if (!$_smarty_tpl->tpl_vars['app']->value['system']){?>
                <div class="block top-padded align-center clear-both">
                    <a class="no-underline" href="?module=apps&amp;action=remove&amp;app_id[<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
]=<?php echo $_smarty_tpl->tpl_vars['app']->value['installed']['vendor'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['installed']['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['app']->value['installed']['edition'];?>
<?php }?>" onClick="return confirm(this.title);" title="Это полностью удалит код и данные приложения без возможности восстановления. Вы уверены?">
                        <i class="icon16 delete"></i>Удалить приложение
                    </a>
                </div>
                <?php }?>
            <?php }?>
        </div>
    </div>

    <div class="content">

        <div class="i-breadcrumbs">
            <a href="#/apps/">Все приложения</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['vendor'])){?> &raquo; <a href="#/apps&vendor=<?php echo $_smarty_tpl->tpl_vars['app']->value['vendor'];?>
/"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['app']->value['vendor_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value['vendor'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?>
        </div>

        <article class="i-summary">

            <div class="profile">
                <div class="image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][96];?>
" alt="" height="96" width="96">
                </div>
                <div class="details">
                    <h1><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['app']->value['status_label'])&&$_smarty_tpl->tpl_vars['app']->value['status_label']){?> <span class="highlighted i-app-label"><?php echo $_smarty_tpl->tpl_vars['app']->value['status_label'];?>
</span><?php }?></h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['app']->value['summary'];?>
</p>


                    <nav>
                        <ul class="menu-h">
                            <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">Обзор</a></li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['pages'])){?>
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                            <li title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                            <?php } ?>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['reviews']['url'])){?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['reviews']['url'];?>
" target="_blank">Отзывы <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['reviews']['count'], ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="icon10 new-window"></i></a></li>
                            <?php }?>
                        </ul>
                    </nav>

                </div>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['screenshots'])){?>
            <div class="i-screenshots">
                <?php $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['app']->value['screenshots']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['screenshot']->value){?>
                <div id="current">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['img'];?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                    <!-- or YouTube / Vimeo video here -->
                </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['app']->value['screenshots'])>1){?>
                <ul class="thumbs">
                    <?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['screenshot']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value){
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
 $_smarty_tpl->tpl_vars['screenshot']->index++;
 $_smarty_tpl->tpl_vars['screenshot']->first = $_smarty_tpl->tpl_vars['screenshot']->index === 0;
?>
                        <li<?php if ($_smarty_tpl->tpl_vars['screenshot']->first){?> class="selected"<?php }?>><a href="#/show/screenshot/" class="js-action"><img data-src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['img'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['thumb'];?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"/></a></li>
                    <?php } ?>
                </ul>
                <?php }?>
            </div>
            <?php }?>

        </article>

        <section class="i-page i-description" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
-info">
            <p><?php echo $_smarty_tpl->tpl_vars['app']->value['description'];?>
</p>
        </section>
        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['pages'])){?>
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <section class="i-page" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:none;">
                <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

            </section>
        <?php } ?>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['changelog'])){?>
            <section class="i-page i-changelog" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
-changelog" style="display:none;">
                <?php  $_smarty_tpl->tpl_vars['changelog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['changelog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app']->value['changelog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['changelog']->key => $_smarty_tpl->tpl_vars['changelog']->value){
$_smarty_tpl->tpl_vars['changelog']->_loop = true;
?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['changelog']->value['version'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['changelog']->value['datetime'])){?> <span class="hint"><?php echo htmlspecialchars(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['changelog']->value['datetime'],'humandate'), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></h5>
                    <?php if (version_compare($_smarty_tpl->tpl_vars['changelog']->value['version'],$_smarty_tpl->tpl_vars['app']->value['installed']['version'],'>')){?><?php }?>
                    <div><?php if (strstr($_smarty_tpl->tpl_vars['changelog']->value['content'],'<')&&strstr($_smarty_tpl->tpl_vars['changelog']->value['content'],'>')){?><?php echo $_smarty_tpl->tpl_vars['changelog']->value['content'];?>
<?php }else{ ?><?php echo nl2br($_smarty_tpl->tpl_vars['changelog']->value['content']);?>
<?php }?></div>
                <?php } ?>
            </section>
        <?php }?>

        
    </div>
<?php }?>
</div>
<script type="text/javascript">
<!--
$.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(($_smarty_tpl->tpl_vars['app']->value['name']).(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php if (!empty($_smarty_tpl->tpl_vars['app']->value['is_premium'])){?>
$.layout.premium.setClass('apps:<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
','premium-layout-<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
');
<?php }?>
//-->
</script>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-02-11 08:26:08
         compiled from "/Users/kosmos/Documents/sites/webassist.framework/wa-apps/installer/templates/includes/requirements.html" */ ?>
<?php if ($_valid && !is_callable('content_5a7ffe207036c7_42068168')) {function content_5a7ffe207036c7_42068168($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['requirements'])){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('warning', null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(false, null, 0);?>
        <?php if (!isset($_smarty_tpl->tpl_vars['class']->value)){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("small red", null, 0);?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['icon']->value)){?><?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(false, null, 0);?><?php }?>
        <ul class="menu-v">
            <?php  $_smarty_tpl->tpl_vars['requirement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requirement']->_loop = false;
 $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['requirements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requirement']->key => $_smarty_tpl->tpl_vars['requirement']->value){
$_smarty_tpl->tpl_vars['requirement']->_loop = true;
 $_smarty_tpl->tpl_vars['subject']->value = $_smarty_tpl->tpl_vars['requirement']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['requirement']->value['warning']&&!$_smarty_tpl->tpl_vars['requirement']->value['passed'])){?> <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(true, null, 0);?>
                    <li>
                        <span class="<?php if (strstr($_smarty_tpl->tpl_vars['subject']->value,'app.')==$_smarty_tpl->tpl_vars['subject']->value){?>hint<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requirement']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php if ($_smarty_tpl->tpl_vars['icon']->value){?><i class="icon10 no<?php if ($_smarty_tpl->tpl_vars['requirement']->value['passed']){?>-bw<?php }?>"></i><?php }?>
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['requirement']->value['warning'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['requirement']->value['note'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                        </span>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['warning_meets']->value&&Smarty::$_smarty_vars['capture']['warning']){?>
        <?php echo Smarty::$_smarty_vars['capture']['warning'];?>

    <?php }?>
<?php }?>
<?php }} ?>