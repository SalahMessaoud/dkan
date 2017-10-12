<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0994ace355f4ee0b4278df72c7ce7222
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0994ace355f4ee0b4278df72c7ce7222::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0994ace355f4ee0b4278df72c7ce7222::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}