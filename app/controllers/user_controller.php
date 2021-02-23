<?php
namespace app\controllers;

use app\core\app_class;
class user_controller_class
{

    public function index_function()
    {
        $users = app_class::get_function('database')->selectAll_function('user_table');
        return view_function('user_view', compact('users'));
    }

    public function store_function()
    {
//        fetch things from database
        app_class::get_function('database')->insert_function('user_table', [
            'user_name' => $_POST['user_name']
        ]);
//        return redirect_function('user');
        header('Location: /');
    }
}