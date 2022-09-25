<?php

// ARRAYS

$ar = ["Hose","Juice", 800, ["Radio", "Television","Print Media"], "Car"];

echo count($ar).'<br/>';  // get the lenth of the array

echo $ar[0];


// printing all element of an array

for($i=0; $i<count($ar); $i++){
     var_dump ($ar[$i]);//.'<br/>';
}


//using the foreach

foreach($ar as $a){
  echo $a.'<br/>';
}

foreach($ar as $a){
    if(is_array($a)){
         foreach($a as $v){
            echo $v.'<br/>';
         }

    }else{ 
        echo $a.'<br/>';
    }
}


// Two Dimensional  Arrays
$twd_array = [
    [2,4,5],
    [22,9,50],
    [12,14,15],
    [72,4,-5]
];

echo $twd_array[0][0];
echo $twd_array[3][2];


echo '<br/>---------------------------------<br/>';
// Associative Array
$assoc_array = [
    "Country"=>"Nigeria",
    "States"=> ["Abia","Anambara","Akwaibom","Bauchi"],
    "Location"=>"West Africa"
];

echo $assoc_array["States"][1];
echo $assoc_array["Location"];


// Objects


class MyObject{
    public $one = "One Billion";

}

class MyObject2{
    public $one_2 = "Two Billion";

    public function __construct($val = ""){
        if(!empty($val)){ 
            $this->one_2 = $val;
        }
    }
}

$obj = new MyObject;
echo $obj->one;

$obj = new MyObject2("");
echo $obj->one_2;


echo '<br/>---------------------------------<br/>';



// JSON  ; converting arrays to JSON and vice versa
$json = json_encode($assoc_array);

echo $json;
echo '<br/>---------------------------------<br/>';



// JSON
echo json_encode($ar);

echo '<br/>---------------------------------<br/>';




//  OOP 

class Bank {
    protected $user ="";
    protected $bal = 0;

    public function deposit($amount){
        $this->bal +=$amount;
    }

    public function debit($amount){
        if($this->bal>$amount){
            $this->bal -=$amount;
        }
    }


    public function checkBalance(){
        $retVal = ["Balance"=>$this->bal, "Customer Name"=>$this->user];
        return json_encode($retVal);
    }


}

$bank = new Bank();
echo $bank->checkBalance();
echo '<br/>---------------------------------<br/>';
// $bank->deposit(900);

// echo $bank->checkBalance();

// echo '<br/>---------------------------------<br/>';
// $bank->deposit(9000);

// echo $bank->checkBalance();

// $bank->debit(980);


// echo $bank->checkBalance();



class Customer extends Bank{
    
    public function __construct( $user, $bal){
         $this->user = $user;
         $this->bal = $bal;

    }


}


$customer = new Customer("Val",100);
echo $customer->checkBalance();

$customer2 = new Customer("Chinedu",190);
echo $customer2->checkBalance();

$customer3 = new Customer("Ugochukwu",180);
echo $customer3->checkBalance();
//===================================//
$customer->deposit(798);
$customer2->deposit(78);
$customer3->deposit(79);

echo '<p>&nbsp;</p>';

echo $customer->checkBalance() .' | '.$customer2->checkBalance() .' | '.$customer3->checkBalance();

//  CONSTANTS

define("USERNAME","MALAM DAUDA");

echo USERNAME;

echo '<p>&nbsp;</p>';

// Convert a striing to ann array and vice versa
$testStr = "Mango, Orange, Cashew, Ujuru";

$srtToArra = explode(", ", $testStr);
echo $srtToArra[2];
print_r($srtToArra);


# conveting arrays to string
   $arr2      = ["Well","OOP","090"];
   $arrToStr  = implode(", ", $arr2);

   echo '<p>&nbsp;</p>';
   echo $arrToStr;


   echo '<p>&nbsp;</p>';
   // Dealing  with strings || using string functions 
   $myString = " I am still in the mood of excitement for the greatthing the Lord has done";
   
   $upper     = strtoupper($myString);  // convert to Capital Letters
   $fw_upper  = ucwords($myString);
   $subStrt   = substr($myString,0,7);
   $subStrt2  = substr($myString,-5,17);

echo $subStrt2 ;
echo $subStrt ;




// USING TRAIT

trait Shared{
     protected $name = "Valentine";

    public function sayHi(){
        echo "Hello ".$this->name;
    }
}



class Greeting{
   use Shared;


}


$g = new Greeting();

$g->sayHi();




?>