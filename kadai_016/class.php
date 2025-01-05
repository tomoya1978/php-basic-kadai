<?php

class Food{
            private $name;
            private $price;

        public function __construct(string $name, int $price) {
           $this->name = $name;           
           $this->price = $price;
        }

            public function set_name(string $name) {
                $this->name = $name;
          }

           public function show_price(int $price) {
                $this->price = $price;
             }

          }


$potato = new Food('potato',250);
print_r($potato);
echo '<br>';



class Animal{

            private $name;
            private $height;
            private $weight;


        public function __construct(string $name, int $height, int $weight) {
           $this->name = $name;           
           $this->height = $height;
           $this->weight = $weight;
        }


           public function animal_name(int $name) {
                 $this->name = $name;
             }


           public function show_height(int $height) {
                 $this->height = $height;
             }

           public function show_weight(int $weight) {
                 $this->weight = $weight;
             }



        }


$dog = new Animal('dog',60,6000);
print_r($dog);



$potato->show_price(250); // priceを表示

$dog->show_height(60); // heightを表示













?>