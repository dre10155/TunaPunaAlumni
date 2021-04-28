<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92678a5c8f2e2b5ddc18ed0c3b62a48b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92678a5c8f2e2b5ddc18ed0c3b62a48b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92678a5c8f2e2b5ddc18ed0c3b62a48b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92678a5c8f2e2b5ddc18ed0c3b62a48b::$classMap;

        }, null, ClassLoader::class);
    }
}
