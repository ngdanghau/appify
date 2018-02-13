<?php

class Banner_BE
{
    public function index()
    {
        include View::adminView('widgets/banner');
        include View::adminView('layouts/footer_default');
    }
}