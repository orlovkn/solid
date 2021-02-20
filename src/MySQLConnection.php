<?php

namespace App;

class MySQLConnection implements DBConnectionInterface
{
    public function connect(): string
    {
        return "MySQL Database connection";
    }
}