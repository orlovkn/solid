<?php

namespace App;

class MongoDBConnection implements DBConnectionInterface
{
    public function connect(): string
    {
        return "Mongo Database connection";
    }
}