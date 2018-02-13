<?php

class Service_BE
{
    public function index()
    {
        $list = Service_Model::get();
        include View::adminView('lists/widgets/service');
        include View::adminView('layouts/footer_table');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Service_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/service');
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
        include View::adminView('pages/create/service');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Service_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=service');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=service');
        }
       
    }
}