<?php

class Screenshot_BE
{
    public function index()
    {
        $list = Screenshot_Model::get();
        include View::adminView('lists/widgets/screenshot');
        include View::adminView('layouts/footer_table');
    }

    public static function config()
    {
        include View::adminView('widgets/screenshot');
        include View::adminView('layouts/footer_default');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Screenshot_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/screenshot');
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
        include View::adminView('pages/create/screenshot');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Screenshot_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=screenshot');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=screenshot');
        }
       
    }
}