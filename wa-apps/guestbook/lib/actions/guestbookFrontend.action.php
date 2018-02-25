<?php
class guestbookFrontendAction extends waViewAction
{
    public function execute()
    {

        // создаем экземпляр модели для получения данных из БД
        $model = new guestbookModel();
        // если получен POST-запрос, то нужно нужно добавить новую запись в БД
        if (waRequest::method() == 'post') {
            // получаем данные из POST-запроса
            $name = waRequest::post('name');
            $text = waRequest::post('text');
            if ($name && $text) {
                // добавляем новую запись в таблицу
                $model->insert(array(
                    'name' => $name,
                    'text' => $text,
                    'datetime' => date('Y-m-d H:i:s')
                ));
            }
        }
        // получаем записи гостевой книги из БД
        $records = $model->order('datetime DESC')->fetchAll();
        // передаем данные в шаблон
        $this->view->assign('records', $records);
    }
}