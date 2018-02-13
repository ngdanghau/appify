<?php

class Menu_BE
{
    public function index()
    {
        $list = Menu_Model::get('parent_id = 0');
        include View::adminView('lists/menu');
		include View::adminView('layouts/footer_table');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Menu_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/menu');
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
        include View::adminView('pages/create/menu');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Menu_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=menu');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=menu');
        }
       
    }
}