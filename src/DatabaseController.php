<?php

namespace ChaosWD\Controllers;

use PDO;

class DatabaseController
{
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function execute($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function __destruct()
    {
        return $this->conn = null;
    }
}
