<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit550770f6d6fbb7a54675a86dd5dc45f2
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit550770f6d6fbb7a54675a86dd5dc45f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit550770f6d6fbb7a54675a86dd5dc45f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit550770f6d6fbb7a54675a86dd5dc45f2::$classMap;

        }, null, ClassLoader::class);
    }
}
