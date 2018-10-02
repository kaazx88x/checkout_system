<?php

class Checkout
{
    private $carts = [];

    function scan($sku){
        $data = file_get_contents('product.json');

        $products = json_decode($data);

        foreach($products as $product){
            if($product->sku == $sku ){
                $this->carts = $product;

            }
            return false;
        }
    }

    function total(){
        $total = 0;
        foreach($this->carts as $cart ){
            $total += $cart->price();
        }

        return $total;
    }
}
