<?php

namespace App\Core;

class App
{
    protected static $registry = [];

    /**
     * Registra en el container valores que le asignemos para
     * obtenerlos desde cualquier parte de la aplicación
     * se definieron como estíticos para que solo se pueda acceder directamente a la clase y no poder instanciados
     * desde el objeto global $this->
     *
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return static::$registry[$key];
    }
}
