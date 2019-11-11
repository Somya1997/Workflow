<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc50c7f232b2a678b866ce13f3ab5766c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc50c7f232b2a678b866ce13f3ab5766c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc50c7f232b2a678b866ce13f3ab5766c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
