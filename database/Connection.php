<?php


class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=phpbeginners','root','a0b0c0d0');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}