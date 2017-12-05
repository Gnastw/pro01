<?php

require_once __DIR__ . '/vendor/autoload.php';

use Fruit\{Product, Cart, StorageSession, Connect, StorageMySQL, StorageRedis};

$products = [
    'apple'      => 10.5,
    'raspberry'  => 13,
    'strawberry' => 7.8,
];

foreach ($products as $name => $price) $$name = new Product($name, $price);

$cart = new Cart(new StorageSession('biocoop'));

$cart->buy($apple, 10);
$cart->buy($raspberry, 10);
$cart->buy($strawberry, 10);
echo "<p>total : {$cart->total()}</p>";
$cart->restore($apple);
echo "<p>total after restore apple : {$cart->total()}</p>";

$cart->reset();
echo "<p>total after reset : {$cart->total()}</p>";

/**
 * DB MySQL
 

Connect::set([
    'dsn' => 'mysql:host=localhost;dbname=biocoop',
    'username' => 'root',
    'password' => 'Antoine'
]);

$cart = new Cart(new StorageMySQL('products', Connect::$pdo));

echo "<pre>";
echo print_r($cart);
echo "</pre>";

$cart->buy($apple, 10);
$cart->buy($raspberry, 10);
$cart->buy($strawberry, 10);
//
echo "<pre>";
echo print_r($cart);
echo "</pre>";
echo "<p>total : {$cart->total()}</p>";
$cart->restore($apple);
echo "<p>total after restore apple : {$cart->total()}</p>";

$cart->reset();
echo "<p>total after reset : {$cart->total()}</p>";
*/
