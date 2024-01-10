<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../useCaseOne/index.php';

function applyFruitDiscount(Basket $basket, float $discount)
{
    foreach ($basket->getProducts() as $product) {
        if ($product instanceof Fruit) {
            $originalPrice = $product->getPrice();
            $discountedPrice = $originalPrice * 0.5;
            $product->setPrice($discountedPrice);
        }
    }
}
$basket = new Basket();
$basket->addProduct(new Fruit('bananas', 1, 6));
echo '<br>';
echo "Here" . applyFruitDiscount($basket, 50);
echo '<br>';
echo "Total price with class after discount is: €" . number_format($basket->calculateTotalPrice(), 2);
