<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit066ca3e25e3ed4286dfbe79899ee6385
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit066ca3e25e3ed4286dfbe79899ee6385::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit066ca3e25e3ed4286dfbe79899ee6385::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
