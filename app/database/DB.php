<?php

class DB
{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'emploues';

    /**
     * Establishes a PDO database connection
     *
     * @return PDO The PDO database connection
     */
    static public function connect()
    {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$database;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ];

            $db = new PDO($dsn, self::$user, self::$password, $options);

            return $db;
        } catch (PDOException $e) {
            // Handle the exception in a way that suits your application
            // For example, you might log the error or display a user-friendly message
            die("Database Connection Error: " . $e->getMessage());
        }
    }
}
