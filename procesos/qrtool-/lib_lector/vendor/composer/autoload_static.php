<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit662c1788fa73252df485c4d5e3d5f2e6
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit662c1788fa73252df485c4d5e3d5f2e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit662c1788fa73252df485c4d5e3d5f2e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
