<?php

namespace App;

class PasswordReminder
{
    private DBConnectionInterface $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function connection()
    {
        return $this->dbConnection->connect();
    }
}