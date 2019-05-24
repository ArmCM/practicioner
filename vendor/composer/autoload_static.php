<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53614804aa7a2a1b585ebaf4c987ca37
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/Task.php',
        'Todo' => __DIR__ . '/../..' . '/Todo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit53614804aa7a2a1b585ebaf4c987ca37::$classMap;

        }, null, ClassLoader::class);
    }
}
