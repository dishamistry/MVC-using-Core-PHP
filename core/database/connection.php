<?php

class connection_class
{
    public static function dbconnect_function($config)
    {
        try {
            //return new PDO('mysql:host=localhost;dbname=pdo_database', 'root', 'password');

            return new PDO($config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}