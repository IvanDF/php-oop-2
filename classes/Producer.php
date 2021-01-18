<?php
/**
 * Producer CLASS
 * 
 * estesta da Product
 */
include_once __DIR__ . '/Product';

class Producer extends Products 
{
    private $producer_name;

    public function __construct($producer_name) 
    {
        $this->producer_name = $producer_name;
    }

    public function producerProducts() 
    {
        $product = parent::getProduct('iPhone');
        return $product . ' ' . $this->producer_name;
    }
}