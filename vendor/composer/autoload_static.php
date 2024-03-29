<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65bbfedf46a859c836ed58d469cd6963
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65bbfedf46a859c836ed58d469cd6963::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65bbfedf46a859c836ed58d469cd6963::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65bbfedf46a859c836ed58d469cd6963::$classMap;

        }, null, ClassLoader::class);
    }
}
