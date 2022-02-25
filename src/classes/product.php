<?php


    class Product{
        public int $id;
        public String $name;
        public float $price;
        
        public function __construct(int $id, String $name, float $price){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            
        }
        function getProduct(){
            echo ($this->id)."<br>";
            echo ($this->name)."<br>";
            echo ($this->price)."<br>";
            echo ($this->quantity)."<br>";

        }
    }
?>