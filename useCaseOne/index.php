<?php
// Banana's (6 pieces, costing €1 each)
//Apples (3 pieces, costing €1.5 each)
//Bottles of wine (2 bottles, costing €10 each) 
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$bananaCount = 6;
$bananaPrice = 1;
$bananaTotal = $bananaCount * $bananaPrice;

$appleCount = 3;
$applePrice = 1.5;
$appleTotal = $appleCount * $applePrice;

$wineCount = 2;
$winePrice = 10;
$wineTotal = $wineCount * $winePrice;

$totalPrice = $bananaTotal + $appleTotal + $wineTotal;

echo "The total price is $totalPrice";

$fruitTax = ($bananaTotal + $appleTotal) * 0.06;
$wineTax = $wineTotal * 0.21;
$totalTax = $fruitTax + $wineTax;

echo '<br>';
echo "Total tax is $totalTax";

class product
{
    protected $name;
    protected $price;
    protected $quantity;
    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function calculateTotalPrice(): float
    {
        return $this->price * $this->quantity;
    }

}

$banana = new product('banana', 1, 6);
$bananaTotal = $banana->calculateTotalPrice();
echo '<br>';
echo "BananaTotal is $bananaTotal";
echo '<br>';
