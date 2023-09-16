<?php


#оператор if 

/*
$a = 5;
$b =2;
$c = 3;

if ($a=== 5 && $b === 2 && $c ===3){
    echo 'yes';
}


else{
    echo 'no';
}

$i = 0;
for (; $i < 30; $i++){
    echo 2 . PHP_EOL;
}



$s = 0;
while ($s < 12)
{
    echo 3 . PHP_EOL;

}


$f = 10;
do{
    echo 4 . PHP_EOL;
}
while($f < 10);
*/



$i = 10;
$arr2 = [
    'кашалек' => 500,
    'коныерт' => 'дипломная работа',
    'чехол' => false,
//  'барсетка' => ['ipad', 'ipon', ['samsung', 'huawei'] ]
   
];

// for($i = 0; $i < count($arr2['барсетка']); $i++)
// {
//     var_dump($arr2['барсетка'][$i]) . PHP_EOL;
// // }
// foreach ($arr2 as $key => $item)
// {
//     $arr2[$key] .='!!!';
//     echo $arr2[$key] . PHP_EOL;
//     echo '$item - ' . $item . PHP_EOL;
// }

// var_dump($arr2);



interface FirstInterface {
    public function getName();

}
interface SecondInterface{
    public function getStatus();

}

class Test implements FirstInterface{
    public $name = "Abror";
    public $status = "Admin";

    public function getName(){
        echo $this->name;
    }
    public function getStatus(){

        echo $this->status;
    }
    
}
$user = new Test;
$user->getStatus();
$user->getName();