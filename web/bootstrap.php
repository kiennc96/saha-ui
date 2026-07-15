<?php
declare(strict_types=1);

/**
 * Bootstrap: autoload PSR-4 đơn giản cho namespace Saha\
 */
spl_autoload_register(static function (string $class): void {
    $prefix = 'Saha\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }
    $relative = str_replace('\\', DIRECTORY_SEPARATOR, substr($class, strlen($prefix)));
    $file = __DIR__ . '/src/' . $relative . '.php';
    if (is_file($file)) {
        require $file;
    }
});

/** @var \Saha\SiteConfig $sahaConfig */
$sahaConfig = \Saha\SiteConfig::default();
