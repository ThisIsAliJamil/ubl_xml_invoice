<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit210d27582666c2e203b41d2b9f97b235
{
    public static $files = array (
        '383eaff206634a77a1be54e64e6459c7' => __DIR__ . '/..' . '/sabre/uri/lib/functions.php',
        '3569eecfeed3bcf0bad3c998a494ecb8' => __DIR__ . '/..' . '/sabre/xml/lib/Deserializer/functions.php',
        '93aa591bc4ca510c520999e34229ee79' => __DIR__ . '/..' . '/sabre/xml/lib/Serializer/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sabre\\Xml\\' => 10,
            'Sabre\\Uri\\' => 10,
        ),
        'N' => 
        array (
            'NumNum\\UBL\\Tests\\' => 17,
            'NumNum\\UBL\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sabre\\Xml\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/xml/lib',
        ),
        'Sabre\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/uri/lib',
        ),
        'NumNum\\UBL\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/num-num/ubl-invoice/tests',
        ),
        'NumNum\\UBL\\' => 
        array (
            0 => __DIR__ . '/..' . '/num-num/ubl-invoice/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit210d27582666c2e203b41d2b9f97b235::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit210d27582666c2e203b41d2b9f97b235::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit210d27582666c2e203b41d2b9f97b235::$classMap;

        }, null, ClassLoader::class);
    }
}
