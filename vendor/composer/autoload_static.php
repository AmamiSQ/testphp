<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb840f4a001e23092135a211a91c73a1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RobThree\\Auth\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RobThree\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/robthree/twofactorauth/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb840f4a001e23092135a211a91c73a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb840f4a001e23092135a211a91c73a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb840f4a001e23092135a211a91c73a1::$classMap;

        }, null, ClassLoader::class);
    }
}