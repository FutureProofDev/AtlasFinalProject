<?php
function database(): PDO {
    static $connection;
    if ($connection instanceof PDO) return $connection;
    $path = dirname(__DIR__) . '/config.php';
    if (!is_file($path)) throw new RuntimeException('Database configuration is missing.');
    $config = require $path;
    $dsn = sprintf('mysql:host=%s;port=%d;Atlas=%s;charset=utf8mb4',
        $config['host'], $config['port'], $config['database']);
    $connection = new PDO($dsn, $config['username'], $config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    return $connection;
}