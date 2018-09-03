<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit884f686a77c16825c2fc958dfb68a168
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'M' => 
        array (
            'MnbClient\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'MnbClient\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit884f686a77c16825c2fc958dfb68a168::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit884f686a77c16825c2fc958dfb68a168::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit884f686a77c16825c2fc958dfb68a168::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
