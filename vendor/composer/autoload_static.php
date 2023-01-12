<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f112a79eb4e77f220858663f3d0e3ac
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/App',
        ),
    );

    public static $classMap = array (
        'App\\Db' => __DIR__ . '/../..' . '/includes/App/Db.php',
        'App\\Product\\Operations\\AddProducts' => __DIR__ . '/../..' . '/includes/App/Product/Operations/AddProducts.php',
        'App\\Product\\Operations\\DeleteProducts' => __DIR__ . '/../..' . '/includes/App/Product/Operations/DeleteProducts.php',
        'App\\Product\\Operations\\ValidateSku' => __DIR__ . '/../..' . '/includes/App/Product/Operations/ValidateSku.php',
        'App\\Product\\Product' => __DIR__ . '/../..' . '/includes/App/Product/Product.php',
        'App\\Product\\Products' => __DIR__ . '/../..' . '/includes/App/Product/Products.php',
        'App\\Product\\View\\ViewProductTypes' => __DIR__ . '/../..' . '/includes/App/Product/View/ViewProductTypes.php',
        'App\\Product\\View\\ViewProducts' => __DIR__ . '/../..' . '/includes/App/Product/View/ViewProducts.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f112a79eb4e77f220858663f3d0e3ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f112a79eb4e77f220858663f3d0e3ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f112a79eb4e77f220858663f3d0e3ac::$classMap;

        }, null, ClassLoader::class);
    }
}
