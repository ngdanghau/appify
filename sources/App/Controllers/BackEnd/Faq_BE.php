<?php

class Faq_BE
{
    public function index()
    {
        $list = Faq_Model::get();
        include View::adminView('lists/widgets/faq');
        include View::adminView('layouts/footer_table');
    }

    public static function config()
    {
        include View::adminView('widgets/faq');
        include View::adminView('layouts/footer_default');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Faq_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/faq');
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
        include View::adminView('pages/create/faq');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Faq_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=contact');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=contact');
        }
       
    }
}