<?php

class Team_BE
{
    public function index()
    {
        $list = Team_Model::get();
        include View::adminView('lists/widgets/team');
        include View::adminView('layouts/footer_table');
    }

    public static function config()
    {
        include View::adminView('widgets/team');
        include View::adminView('layouts/footer_default');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Team_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/team');
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
        include View::adminView('pages/create/team');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Team_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=team');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=team');
        }
       
    }
}