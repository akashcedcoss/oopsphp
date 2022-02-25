<?php

    require("classes/product.php");
    require("classes/cart.php");

    $cart = new Cart();
    $product1 = new Product(1, "BasketBall", 120);
    $product2 = new Product(2, "Soccerr", 120);
    $product3 = new Product(3, "Football", 120);
    
    $cart->addCart($product1);
    $cart->addCart($product1);
    $cart->addCart($product1);    
    $cart->addCart($product2);
    $cart->addCart($product3);
    $cart->addCart($product1);
    $cart->addCart($product1);
    $cart->addCart($product1);    
    $cart->addCart($product2);
    $cart->addCart($product3);

    echo "<pre>";
        print_r($cart->retCart());
        echo ($product3->getProduct());
    echo "</pre>";
    foreach($cart as $key=>$p){
        $cart[$key]->getProduct();
    }


?>