<?php
class Admin
{
    public function index()
    {
        include View::adminView('index');
    }

    public function logout()
    {
        if (Auth_Model::logout()) {
        	header('Location: '.Config::SITE_URL . '/admincp/');
        }
    }

}