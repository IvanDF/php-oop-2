<?php
/**
 * Specs CLASS
 * 
 * estesta da Product
 */
include_once __DIR__ . '/Product';

class Specs extends Products 
{
    public $production_date;
    public $battery;
    public $cpu;
    public $display;
    public $os;

    public function __construct($production_date, $battery, $cpu, $display, $os)
    {
        $this->production_date = $production_date;
        $this->battery = $battery;
        $this->cpu = $cpu;
        $this->display = $display;
        $this->os = $os;
    }

    public function getSpecsProduct() {
        $product_name = parent::getProduct('iPhone 11');
        return $product_name . ' ' . $this->production_date = 2020;
    }

    public function getSpecs() {
        return "
            <li>
               Uscito nel:  $this->production_date
            </li>
            <li>
                Capacità batteria: $this->battery
            </li>
            <li>
                Processore: $this->cpu
            </li>
            <li>
                Display: $this->display
            </li>
            <li>
                Sistema operativo: $this->os
            </li>
            ";
    }

}