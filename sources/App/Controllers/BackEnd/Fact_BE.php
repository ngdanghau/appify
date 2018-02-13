<?php

class Fact_BE
{
    public function index()
    {
        $list = Fact_Model::get();
        include View::adminView('lists/widgets/fact');
        include View::adminView('layouts/footer_table');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Fact_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/fact');
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
        include View::adminView('pages/create/fact');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Fact_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=fact');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=fact');
        }
       
    }
}