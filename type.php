<?php
#типы данных
$a = 45.6;
$s = "письмо от друга";

$bool = false;
var_dump($a );
var_dump($s);
var_dump($bool);



#массивы


$arr1 = array(150, 'бумага',true );

$arr2 = [
    'кашалек' => 500,
    'коныерт' => 'дипломная работа',
    'чехол' => false,
    'барсетка' => ['ipad', 'ipon', ['samsung', 'huawei']
    ]
];


$obj =  new stdClass;
$obj->a = $arr2;

var_dump($arr1);
var_dump($arr2);
var_dump($obj);


