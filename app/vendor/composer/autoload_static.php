<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cd3ba675b0e7a70efecf16bff49cff1
{
    public static $classMap = array (
        'Controller' => __DIR__ . '/../..' . '/assets/srcPHP/Controller/Controller.php',
        'Error' => __DIR__ . '/../..' . '/assets/srcPHP/Controller/Engine/Error.php',
        'Index' => __DIR__ . '/../..' . '/assets/srcPHP/Controller/Engine/Index.php',
        'Login' => __DIR__ . '/../..' . '/assets/srcPHP/Controller/Engine/Login.php',
        'Logins' => __DIR__ . '/../..' . '/assets/srcPHP/Model/Library/Logins.php',
        'Model' => __DIR__ . '/../..' . '/assets/srcPHP/Model/Model.php',
        'Router' => __DIR__ . '/../..' . '/assets/srcPHP/Controller/Router/Router.php',
        'View' => __DIR__ . '/../..' . '/assets/srcPHP/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3cd3ba675b0e7a70efecf16bff49cff1::$classMap;

        }, null, ClassLoader::class);
    }
}