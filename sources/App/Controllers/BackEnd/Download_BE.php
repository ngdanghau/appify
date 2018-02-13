<?php

class Download_BE
{
    public function index()
    {
        include View::adminView('widgets/download');
        include View::adminView('layouts/footer_default');
    }


    public static function add()
    {
        include View::adminView('pages/create/menu');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Category_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=menu');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=menu');
        }
       
    }
}