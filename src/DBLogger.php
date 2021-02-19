<?php

namespace App;

class DBLogger implements LoggerInterface
{
    private function saveToDBe(string $message): void
    {
        echo $message . "<br>The log was saved to the DataBase";
    }

    public function log(string $message): void
    {
        $this->saveToDBe($message);
    }
}