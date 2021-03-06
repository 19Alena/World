<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4701d7b1d18478813c22984a0c7e526
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Olena\\SimpleDocker\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Olena\\SimpleDocker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4701d7b1d18478813c22984a0c7e526::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4701d7b1d18478813c22984a0c7e526::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4701d7b1d18478813c22984a0c7e526::$classMap;

        }, null, ClassLoader::class);
    }
}
