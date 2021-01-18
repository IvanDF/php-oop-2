<?php
/**
 * PRODUCT CLASS
 */
class Products 
{
    // Properties
    public $product_name;
    public $product_type;
    public $product_description;
    public $price;

    public function __construct($product_name, $product_type, $product_description, $price) 
    {
        $this->product_name = $product_name;
        $this->product_type = $product_type;
        $this->product_description = $product_description;
        $this->price = $price;
    }

    public function printProduct() 
    {
        return $this->product_name . ' <br> ' . $this->product_description;   
    }

    protected function getProduct($product_name) 
    {
        return $product_name;
    }

    // Methods
    public function calculateDeal($perc) 
    {
        $deal = $this->price - ($this->price * ($perc / 100));
        return  '€ ' . number_format($deal, 2);
    }
}