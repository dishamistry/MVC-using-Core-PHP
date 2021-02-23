<?php

namespace app\controllers;

class pages_controller_class
{

    public function home_function()
    {
//        die('home');


//        require_once 'views/index_view.php';
        return view_function('index_view');
//        return view_function('index_view', ['users' => $users]);
    }

    public function contact_function()
    {
//        require_once 'views/contact_view.php';
        return view_function('contact_view');
    }


    public function about_function()
    {
//        require_once 'views/about_view.php';
        return view_function('about_view');
    }

}