<?php

class Food{
            private $name;
            private $price;

        public function __construct(string $name, int $price) {
           $this->name = $name;           
           $this->price = $price;
        }

            public function set_name() {
                echo $this->name;
          }

           public function show_price() {
                echo $this->price;
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


           public function animal_name() {
                 echo $this->name;
             }


           public function show_height() {
                 echo $this->height;
             }

           public function show_weight() {
                 echo $this->weight;
             }



        }


$dog = new Animal('dog',60,6000);
print_r($dog);


echo '<br>';
$potato->show_price(); // priceを表示

echo '<br>';
$dog->show_height(); // heightを表示













?>