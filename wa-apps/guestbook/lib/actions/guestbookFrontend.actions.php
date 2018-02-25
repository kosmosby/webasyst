<?php
class guestbookFrontendActions extends waViewActions
{
    public function defaultAction()
    {

        echo 'the second enter for frontend'; die;

        // реализация экшена, отображающего список записей на странице (в данном примере это
        // действие по умолчанию)
    }
    public function deleteAction()
    {
        //реализация экшена удаления записи
    }

    public function execute()
    {

        echo 'the third enter for frontend'; die;

    }
}