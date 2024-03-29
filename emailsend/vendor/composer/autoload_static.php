<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92f4deb665d43a823ffb974b836a08fd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92f4deb665d43a823ffb974b836a08fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92f4deb665d43a823ffb974b836a08fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92f4deb665d43a823ffb974b836a08fd::$classMap;

        }, null, ClassLoader::class);
    }
}
