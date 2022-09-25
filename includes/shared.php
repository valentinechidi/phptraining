<?php

trait Shared{
    protected $name = "Ukweze Vale";

   public function sayHi(){
       echo "Hello ".$this->name;
   }
}