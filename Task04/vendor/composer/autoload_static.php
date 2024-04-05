<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58be64c9efddeec32f8725de28b7c575
{
    public static $files = array (
        '72ebf18e57e2b4f956500cbaa0aafe29' => __DIR__ . '/../..' . '/src/compareStrings.php',
        '65b94bf1d8eaf0216f5bbd7924f252fd' => __DIR__ . '/../..' . '/src/Test.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58be64c9efddeec32f8725de28b7c575::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58be64c9efddeec32f8725de28b7c575::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58be64c9efddeec32f8725de28b7c575::$classMap;

        }, null, ClassLoader::class);
    }
}