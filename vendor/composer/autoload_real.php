<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite3d8cd40b1d5e2f2489c8bf75f7e6749
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite3d8cd40b1d5e2f2489c8bf75f7e6749', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite3d8cd40b1d5e2f2489c8bf75f7e6749', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite3d8cd40b1d5e2f2489c8bf75f7e6749::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInite3d8cd40b1d5e2f2489c8bf75f7e6749::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiree3d8cd40b1d5e2f2489c8bf75f7e6749($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiree3d8cd40b1d5e2f2489c8bf75f7e6749($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
