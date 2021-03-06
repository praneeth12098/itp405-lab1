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

echo $shoppingCart->getTotal();
