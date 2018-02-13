<?php

class Comment_BE
{
    public function index()
    {
        $list = Comment_Model::getAll();
        include View::adminView('lists/comment');
        include View::adminView('layouts/footer_table');
    }

    public static function edit($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Comment_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/comment');
                include View::adminView('layouts/footer_default');
            }else{
                return Error_Controller::e404();
            }
        }else{
            return Error_Controller::e500();
        }
        
    }

    public static function add($id)
    {
        if (!empty($id)) {
        $item = Comment_Model::show($id);
        $check = $item->parent_id;
            if (!empty($item)) {
            	if ($item->parent_id == 0) {
            		include View::adminView('pages/create/comment');
                	include View::adminView('layouts/footer_editor');
            	}else{
            		$id = $item->parent_id;
            		include View::adminView('pages/create/comment');
                	include View::adminView('layouts/footer_editor');
            	}
                
            }else{
                return Error_Controller::e404();
            }
        }else{
            include View::adminView('pages/create/commentadmin');
            include View::adminView('layouts/footer_editor');
        }
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = Comment_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=comment');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=comment');
        }
       
    }

    public static function mask()
    {
        if ($_SESSION['role'] == 1) {
            $item = Comment_Model::mask();
            header('Location: '.Config::SITE_URL.'/admincp/?action=comment');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=comment');
        }
       
    }
}