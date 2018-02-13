<?php

class Config_BE
{
    public function index()
    {
        include View::adminView('pages/edit/config');
        include View::adminView('layouts/footer_default');
    }
}