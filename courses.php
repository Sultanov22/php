<?php

//define("DBNAME", "laravel");
//$name = "Abror";
//
//$balance = 0;
//$addbalance1 = 20;
//$addbalance2 = 65;
//
//$balance = $addbalance1 + $addbalance2;
//echo $balance . PHP_EOL;






//$svetofor = 'redafr';
//if ($svetofor == 'green') {
//    echo 'зеленный можно переходить дорогу' . PHP_EOL;
//} else if ($svetofor == 'yellow') {
//    echo 'Сейчас светофор желтый' . PHP_EOL;
//}
//else {
//    echo 'жду зеленного света' . PHP_EOL;
//}






//switch ($svetofor) {
//    case 'green':
//        echo 'зеленный можно переходить дорогу' . PHP_EOL;
//        break;
//    case 'yellow':
//        echo 'Сейчас светофор желтый' . PHP_EOL;
//        break;
//    case 'red':
//        echo 'жду зеленного света' . PHP_EOL;
//        break;
//    default:
//        echo 'светофор не работает' . PHP_EOL;
//        break;
//}

//$time = '20';
//if ($time == "16"){
//    echo "урок начался" . PHP_EOL;
//} else {
//    echo "ждем начала урока" . PHP_EOL;
//}

//switch ($time) {
//    case '16':
//        echo 'урок начался' . PHP_EOL;
//        break;
//    case '15':
//        echo 'урок еще не начался, ждем начала урока' . PHP_EOL;
//        break;
//    case '17':
//        echo 'урок уже начался, вы опаздали на час можете идти домой' . PHP_EOL;
//        break;
//    case '18':
//        echo 'урок уже закончился' . PHP_EOL;
//        break;
//    default:
//        echo 'сегодня занятие не будет'. PHP_EOL;
//}







//$a = 1;
//while ($a <= 20) {
//    echo $a . PHP_EOL;
//    $a++;
//}
//
//$b = 11;
//while ($b <= 11) {
//    echo $b . PHP_EOL;
//    $b++;
//}





//do {
//    echo $b . PHP_EOL;
//    $b++;
//} while($b <= 10);
//




//for ($b = 11; $b <= 10; $b++){
//    echo $b . PHP_EOL;
//}






//$arr[0] = "Abror";
//$arr[1] = "Sultanov";
//$arr[2] = "coder";
//print_r($arr);
//echo count($arr);
//for ($i = 0; $i < count($arr); $i++){
//    echo $arr[$i] . PHP_EOL;
//}
//$i = 0;
//while ($i < count($arr)) {
//    echo $arr[$i] .  PHP_EOL;
//    $i++;
//}



//foreach ($arr as $key => $value) {
//    echo "ключ" . $key." - значение " .$value . PHP_EOL;
//}
//
//$arr["product"] = "продукты";
//$arr["water"] = "бутылка с водой";
//
//foreach($arr as $key => $value) {
//    echo $key . PHP_EOL;
//}


$arr = array('Abror', 'Sultanov');
//unset($arr[1]);
array_push($arr, "яблоко");
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");
$arr = array_unique($arr);
array_push($arr, "грейфрут");
//$arr = array_reverse($arr);
//sort($arr);
//shuffle($arr);
$arr2 = array("какос", "арбуз");
$newarr = array_merge($arr, $arr2);
foreach ($newarr as $key => $value) {
//    echo "ключ " . $key . " - значение " . $value . PHP_EOL;
}

                        // ПЕРЕОБРАЗОВАНИЕ МАССИВА В СТРОКУ
//$str = implode(" - ", $newarr);
//echo $str . PHP_EOL;

                        // ПЕРЕОБРАЗОВАНИЕ СТРОКУ В МАССИВ

//$str = "бутылка, банка, крышка";
//$strarr = explode(", ", $str);
//print_r($strarr);



//$str = "Банан, Апельсин, Груша, Мандарин, Яблоко, Арбуз";
//
///* Вместо $arr = []; напишите ваш код */
//$arr = explode(", ", $str);
//
//foreach($arr as $key => $value) {
//    echo $value . PHP_EOL ;
//}
//
                    // МНОГОМЕРНЫЕ МАССИВЫ
//$cam ["market1"]["row1"][0] = "продукты";
//$cam ["market1"]["row1"][1] = "сумка";
//$cam ["market2"]["row2"][0] = "яблоко";
//$cam ["market2"]["row2"][1] = "апельсин";
//$cam ["market2"]["row2"][2] = "банан";

//
//$cam = array(
//    "market1" => array(
//        "row1" => array(
//            "продукты", "сумка"
//        ),
//        "row2" => array(
//            "апельсин", "банан"
//        )
//    ),
//    "market2" => array(
//        "row1" => array(
//            "продукты", "сумка"
//        ),
//        "row2" => array(
//            "яблоко", "апельсин"
//        )
//    )
//);
//print_r($cam);
//
//foreach ($cam as $key => $value){
//    foreach ($value as $key2 => $value2){
//        foreach ($value2 as $key3 => $value3){
//            echo $value3;
//        }
//    }
//}


                                // ФУНКЦИИ

function sum($a, $b) {
    $result = false;
    if(!is_numeric($a)) {
        $result = "Ошибка, значение 'а' не является числом";
    }else if(!is_numeric($b)) {
        $result = " Ошибка, значение 'b' не является числом";
    }else {
        $result = $a + $b;
    }
    return $result;
}
//
//function maxSum($sum) {
//    $result = false;
//    if($sum > 30){
//        $result = "Сумма больше 30";
//    }else {
//        $result = "Сумма меньше 30";
//    }
//    return $result;
//}
//echo maxSum(sum(9, 3));



                                            // ООП


//class Human {
//    private $words;
//
//    public function setWords($words) {
//        $this->words = $words;
//    }
//    public function getWords() {
//        return $this->words;
//    }
//    public function sayIT() {
//        return $this->getWords();
//    }
//}
//
//$human = new Human();
//$human->setWords("hello!");
//echo $human->sayIT();

//class Human {
//    private $name;
//    public function __construct($name) {
//        $this->name = $name;
//    }
//
//    public function say() {
//        echo "меня завут " . $this->name. " и";
//    }
//}
//
//class Man extends Human {
//    public function beard() {
//        echo " у меня растет борода" . PHP_EOL;
//    }
//}
//
//class Women extends Human {
//    public function bearChildren() {
//        echo " я рожаю детей";
//    }
//}
//
//$man = new Man("Abror");
//$man->say();
//$man->beard();
//
//$women = new Women("Катя");
//$women->say();
//$women->bearChildren();
//

//class Abror  {
//    private $name;
//    public function __construct($name) {
//        $this->name = $name;
//    }
//    public function say() {
//        echo "меня завут " . $this->name . " и ";
//    }
//}
//class Work extends Abror {
//    public function dev() {
//        echo "я junior разработчик" . PHP_EOL;
//    }
//}
//
//$work = new Work("Аброр");
//$work->say();
//$work->dev();



interface Say {
    public function say();
}

abstract class Human implements Say {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

class Man extends Human {
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function beard() {
        echo " у меня растет борода" . PHP_EOL;
    }

    public function say()
    {
        echo "У меня мужской голос, меня зовут " . $this->getName(). " и ";
    }
}

class Women extends Human {
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function bearChildren(){
        echo "я рожаю детей" . PHP_EOL;
    }

    public function say()
    {
        echo "У меня женский голос, меня зовут ". $this->getName(). " и ";
    }
}

$man = new Man("Abror");
$man->say();
$man->beard();

$women = new Women("Марина");
$women->say();
$women->bearChildren();