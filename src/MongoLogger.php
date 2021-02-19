<?php

namespace App;

class MongoLogger implements LoggerInterface
{
    private function saveToFile($message): void
    {
        echo $message . "<br>The log was saved to the to MongoDB";
    }

    public function log(string $message): void
    {
        $this->saveToFile($message);
    }
}