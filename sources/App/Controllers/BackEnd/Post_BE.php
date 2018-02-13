<?php

class Post_BE
{
    public function index()
    {
        if (in_array($_SESSION['role'],[1,2])) {
            $list = Post_Model::getAll();
            include View::adminView('lists/post');
            include View::adminView('layouts/footer_table');
        }else{
            $list = Post_Model::getByUser($_SESSION['Adminid']);
            include View::adminView('lists/post');
            include View::adminView('layouts/footer_table');
        }
        
    }

    public static function edit($id)
    {
        if (in_array($_SESSION['role'],[1,2])) {
            $item = Post_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/post');
                include View::adminView('layouts/footer_editor');
            }else{
                return Error_Controller::e404();
            }
        }else{
                $item = Post_Model::show($id);
            if ($_SESSION['Adminid'] == $item->author) {
                include View::adminView('pages/edit/post');
                include View::adminView('layouts/footer_editor');
            }else{
                return Error_Controller::e500(); 
            }
            
        }
        
    }

    public static function add()
    {
        include View::adminView('pages/create/post');
        include View::adminView('layouts/footer_editor');
    }

    public static function delete($id)
    {
        if (in_array($_SESSION['role'],[1,2])) {
            $item = Post_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=post'); 
        }else{
            if ($_SESSION['Adminid'] ==  Post_Model::show($id)->author) {
                $item = Post_Model::delete($id);
                header('Location: '.Config::SITE_URL.'/admincp/?action=post'); 
            }else{
                header('Location: '.Config::SITE_URL.'/admincp/?action=post');
            }
            
        }
       
    }
}