<?php

class query_builder_class
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll_function($table_name)
    {
        $select_task = $this->pdo->prepare("SELECT * FROM {$table_name}");
        $select_task->execute();
        return $select_task->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert_function($table, $parameters)
    {
//        die(var_dump(array_keys($parameters)));
        $sql = sprintf(

            'insert into %s(%s) values(%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))

        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            print_r($sql);
        } catch (Exception $e) {
            die("something went wrong!");
        }
    }
}