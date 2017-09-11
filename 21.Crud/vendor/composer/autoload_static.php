<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80504f247486a49b6e864a93b1ef96a3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80504f247486a49b6e864a93b1ef96a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80504f247486a49b6e864a93b1ef96a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}