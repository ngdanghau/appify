<?php

class User_BE
{
    public function index()
    {
        $list = User_Model::get([4,5]);
        include View::adminView('lists/user');
		include View::adminView('layouts/footer_table');
    }

    public function showAdmin()
    {
        $list = User_Model::getAdmin([1,2,3]);
        include View::adminView('lists/admin');
        include View::adminView('layouts/footer_table');
    }

    public static function show($id)
    {
	    $item = User_Model::show($id);
	    if (!empty($item)) {
	    	$list = User_Model::get([$item->role]);
	        include View::adminView('pages/show/user');
			include View::adminView('layouts/footer_default');
	    }else{
	    	return Error_Controller::e404();
	    }
        
    }

    public static function edit($id)
    {
        if ($_SESSION['Adminid'] == $id) {
            $item = User_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/admin');
                include View::adminView('layouts/footer_default');
            }else{
                return Error_Controller::e404();
            }
        }elseif ($_SESSION['role'] == 1) {
             $item = User_Model::show($id);
            if (!empty($item)) {
                include View::adminView('pages/edit/admin');
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
        include View::adminView('pages/create/admin');
        include View::adminView('layouts/footer_default');
    }

    public static function delete($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = User_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=admin');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=admin');
        }
       
    }

    public static function password($id)
    {
        if ($_SESSION['Adminid'] == $id) {
             $item = User_Model::show($id);
            include View::adminView('pages/edit/password');
            include View::adminView('layouts/footer_default');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=admin&mode=edit&id='.$_SESSION['Adminid']);
        }
       
    }

    public static function deleteUser($id)
    {
        if ($_SESSION['role'] == 1) {
            $item = User_Model::delete($id);
            header('Location: '.Config::SITE_URL.'/admincp/?action=user');
        }else{
            header('Location: '.Config::SITE_URL.'/admincp/?action=user');
        }
       
    }
}