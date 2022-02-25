<?php

    class Cart
        {
        private array $cart;
        public function __construct(){
            $this->cart = array();

        }
        public function addCart(Product $product)
        {
            if(!$this->productExists($product))
            {
                $product->quantity = 1;
                array_push($this->cart, $product);
            }
        }
        public function productExists(Product $product)
     {
        foreach($this->cart as $key=>$p)
        {
            if($p->id == $product->id)
            {
                $this->cart[$key]->quantity += 1;
                
                
                  return true;
            }
              
        }
        return false;
    }
     public function retCart()
       {
            return $this->cart;
       }

       
              
    }
    

?>