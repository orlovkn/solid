<?php

namespace App;

class Product
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice($price)
    {
        $this->logger->log("The price of this product is " . $price);
    }

}