<?php

include_once __DIR__ . '/Product';

class Producer extends Products {
    public $producer_name;

    public function __construct($product_name, $producer_type, $product_description, $price, $producer_name) {
        parent:: __construct($product_name, $producer_type, $product_description, $price);
        $this->producer_name = $producer_name;
    }

    public function producerProducts() {
        return $this->product_name . ' ' . $this->producer_name;
    }
}