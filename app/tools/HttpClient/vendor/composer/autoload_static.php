<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34330774ad20ec98852b9e65539a31c3
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leaps\\HttpClient\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leaps\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Leaps/HttpClient',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34330774ad20ec98852b9e65539a31c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34330774ad20ec98852b9e65539a31c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}