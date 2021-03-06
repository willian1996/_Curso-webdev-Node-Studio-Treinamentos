<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit193f72b5baa10e2c34923ce5f5a3bfa0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit193f72b5baa10e2c34923ce5f5a3bfa0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit193f72b5baa10e2c34923ce5f5a3bfa0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
