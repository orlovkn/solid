<?php

namespace App;

class FileLogger implements LoggerInterface
{
    private function saveToFile($message): void
    {
        echo $message . "<br>The log was saved to the to the file";
    }

    public function log(string $message): void
    {
        $this->saveToFile($message);
    }
}