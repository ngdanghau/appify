<?php
class Error_Controller
{
    public static function e404()
    {
        include View::adminView('errors/404');
        include View::adminView('layouts/footer_default');
    }

    public static function e500()
    {
        include View::adminView('errors/500');
        include View::adminView('layouts/footer_default');
    }

}