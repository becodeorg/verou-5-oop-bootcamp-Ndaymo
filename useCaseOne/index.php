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

class Product
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

class basket
{
    protected $products;

    public function __construct()
    {
        $this->products = [];
    }
    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
    public function calculateTotalPrice(): float
    {

        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->calculateTotalPrice();
        }
        return $totalPrice;
    }

    public function calculateTax(): float
    {

        $totalTax = 0;
        foreach ($this->products as $product) {
            if ($product instanceof Fruit) {
                $totalTax += $product->calculateTotalPrice() * 0.06;
            } elseif ($product instanceof Wine) {
                $totalTax += $product->calculateTotalPrice() * 0.21;
            }
        }
        return $totalTax;
    }
}

class Fruit extends Product
{

}

class Wine extends Product
{

}

$bananas = new Fruit('Bananas', 6, 1);
$wine = new Wine('Wine', 10, 2);
$apples = new Fruit('Apples', 1.5, 3);

$basket = new Basket();
$basket->addProduct($bananas);
$basket->addProduct($apples);
$basket->addProduct($wine);

$totalPrice = $basket->calculateTotalPrice();
$totalTax = $basket->calculateTax();

echo '<br>';
echo "Total price with class is: " . number_format($totalPrice, 2);
echo '<br>';
echo "Total tax with class is: " . number_format($totalTax, 2);