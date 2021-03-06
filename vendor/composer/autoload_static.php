<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c03e4c5a83fdd33b1c34f504752af7b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c03e4c5a83fdd33b1c34f504752af7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c03e4c5a83fdd33b1c34f504752af7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c03e4c5a83fdd33b1c34f504752af7b::$classMap;

        }, null, ClassLoader::class);
    }
}
