<?php

class Choose_BE
{
    public function index()
    {
        $list = Choose_Model::get();
        include View::adminView('lists/widgets/choose');
        include View::adminView('layouts/footer_table');
    }

    public static function config()
    {
        include View::adminView('widgets/choose');
        include View::adminView('layouts/footer_default');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Choose_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/choose');
                include View::adminView('layouts/footer_default');
            }else{
                return Error_Controller::e404();
            }
        }else{
            return Error_Controller::e500();
        }
        
    }

    public static function add()
    {
        include View::adminView('pages/create/choose');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Choose_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=choose');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=choose');
        }
       
    }
}