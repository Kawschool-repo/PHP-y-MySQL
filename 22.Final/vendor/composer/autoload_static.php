<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bd8c85dba45c2c97387b99032b7f94d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kawschool\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kawschool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bd8c85dba45c2c97387b99032b7f94d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bd8c85dba45c2c97387b99032b7f94d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
