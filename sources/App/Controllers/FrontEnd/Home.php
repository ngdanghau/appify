<?php

class Home
{
    public function show()
    {
    	$title = Config_Model::get('site_title');
    	$description = Config_Model::get('site_description');
    	$tags = Config_Model::get('site_tags');
        include View::Template('home');
    }

}