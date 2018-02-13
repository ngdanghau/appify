<?php

class File_Manager
{
    public function index()
    {
        include View::adminView('filemanager');
		include View::adminView('layouts/footer_file');
    }
}