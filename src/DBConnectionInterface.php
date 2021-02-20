<?php

namespace App;

interface DBConnectionInterface
{
    public function connect(): string;
}