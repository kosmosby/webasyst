<?php
class guestbookBackendActions extends waViewActions
{
    /**
     * Действие по умолчанию, вывод всех записей из гостевой книги
     * URL: guestbook/
     */
    public function defaultAction()
    {


//        $xml = simplexml_load_file("wa-apps/guestbook/xml/demo.xml");
//
//        $AssocArray = array();
//        $AssocArray = $this->RecurseXML($xml);
//
//        //die;
////        foreach($xml as $key=>$value) {
////            echo "<pre>";
////            print_r($key); die;
////        }
//
//
//        // создаем экземпляр модели для получения данных из БД
//        $model = new guestbookModel();
//        // получаем записи гостевой книги из БД
//        $records = $model->order('datetime DESC')->fetchAll();
//        // передаем записи в шаблон
//        $this->view->assign('records', $records);
//        // передаём URL фронтенда в шаблон
//        $this->view->assign('url', wa()->getRouting()->getUrl('guestbook'));
//        /*
//        * передаём в шаблон права пользователя на удаление записей из гостевой книги
//        * права описаны в файле lib/config/guestbookRightConfig.class.php
//        */
//        $this->view->assign('rights_delete', $this->getRights('delete'));
    }


    public function RecurseXML($xml,$parent="")
    {
        $child_count = 0;
        foreach($xml as $key=>$value)
        {
            $child_count++;
            if($this->RecurseXML($value,$parent.".".$key) == 0)  // no childern, aka "leaf node"
            {
                print($parent . "." . (string)$key . " = " . (string)$value . "<BR>\n");
            }
        }
        return $child_count;
    }

    /**
     * удаление записи из гостевой книги
     * URL: guestbook/?action=delete&id=$id
     */
    public function deleteAction()
    {
        // если у пользователя есть права на удаление записей из гостевой книги
        if ($this->getRights('delete')) {
            // получаем id удаляемой записи
            $id = waRequest::get('id', 'int');
            if ($id) {
                // удаляем запись из таблицы
                $model = new guestbookModel();
                $model->deleteById($id);
            }
        }
        // перенаправление пользователя на главную страницу приложения
        $this->redirect(wa()->getAppUrl());
    }
}