<?php
 include_once('./shared.php');

class Greeting{
    use Shared;
 
 
 }
 

 $g = new Greeting();

 $g->sayHi();
 
 ?>