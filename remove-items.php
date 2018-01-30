<?php 

require('./ShoppingCart.php');
require('./LineItem.php');
require('./Product.php');

// use Apple\iTunes\Checkout\ShoppingCart;


$album = new Product('Bright Soundtrack', 10.99);
$song = new Product('some song', 0.99);
$show = new Product('Burn Notice', 29.99);


$shoppingCart = new ShoppingCart();
$lineItem1 = new LineItem($album, 1);
$lineItem2 = new LineItem($song, 1);
$lineItem3 = new LineItem($show, 1);

$shoppingCart->add($lineItem1);
$shoppingCart->add($lineItem2);
$shoppingCart->add($lineItem3);


echo "before - total shopping cart price: " . ' ' . $shoppingCart->getTotal();
echo "<br>";
echo "removing " . ' ' . $lineItem1->getProductName() . '-' . $lineItem1->getProductPrice();
echo "<br>";

$shoppingCart->remove($lineItem1);

echo "after - total shopping cart price: " . ' ' . $shoppingCart->getTotal();

echo "<br><br><br>";


echo "before - total shopping cart price: " . ' ' . $shoppingCart->getTotal();
echo "<br>";
echo "removing " . ' ' . $lineItem2->getProductName() . '-' . $lineItem2->getProductPrice();
echo "<br>";

$shoppingCart->remove($lineItem2);

echo "after - total shopping cart price: " . ' ' . $shoppingCart->getTotal();
