<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae104def4f91a17283329fdcaf682d88
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitae104def4f91a17283329fdcaf682d88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae104def4f91a17283329fdcaf682d88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
