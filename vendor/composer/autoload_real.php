<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitca1015b31a0fd32c6e004c58bd4b5ebc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitca1015b31a0fd32c6e004c58bd4b5ebc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitca1015b31a0fd32c6e004c58bd4b5ebc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitca1015b31a0fd32c6e004c58bd4b5ebc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
