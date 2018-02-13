<?php

class Video_BE
{
    public function index()
    {
        $url = Widget_Video::get('url');
        include View::adminView('widgets/video');
        include View::adminView('layouts/footer_default');
    }
}