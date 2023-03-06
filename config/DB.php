<?php

class DB
{
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
}

