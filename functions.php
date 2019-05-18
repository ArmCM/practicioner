<?php

function permission($age)
{
    if ($age > 18) {
        echo "you have a permission";
    } else {
        echo "you can't access";
    }
}

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=phpbeginners','root','a0b0c0d0');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTodos($pdo)
{
    $statement = $pdo->prepare('select * from task');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
}
