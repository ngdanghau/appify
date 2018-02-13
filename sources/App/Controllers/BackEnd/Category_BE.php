<?php

class Category_BE
{
    public function index()
    {
        $list = Category_Model::get();
        include View::adminView('lists/category');
		include View::adminView('layouts/footer_table');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Category_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/category');
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
        include View::adminView('pages/create/category');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Category_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=category');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=category');
        }
       
    }
}