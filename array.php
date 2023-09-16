<?php

/*
$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "Элемент массива p1: " . $p1[2] . PHP_EOL;

$p2 = array('Copier' => "Copier & Multipurpose",
            'Inkjet' => "Inkjet Printer",
            'Laser' => "Laser Printer",
            'Photo' => "hotographic Paper");

    echo "Элемент массива p2: " . $p2['inkjet'] . PHP_EOL;*/



/*$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

foreach($paper as $item)
{
    echo "$j: $item" . PHP_EOL;
    ++$j; 
}*/



/*$paper = array('Copier' => "Copier & Multipurpose",
            'Inkjet' => "Inkjet Printer",
            'Laser' => "Laser Printer",
            'Photo' => "hotographic Paper");

foreach ($paper as $item => $description)
    echo "$item: $description" . PHP_EOL;*/



   /* $paper = array('Copier' => "Copier & Multipurpose",
            'Inkjet' => "Inkjet Printer",
            'Laser' => "Laser Printer",
            'Photo' => "hotographic Paper");
    
            while (list($item, $description) = each($paper))  
            echo "$item: $description" . PHP_EOL;*/


#list($a, $b) = array('Alice', 'Bob');
#echo "a=$a b=$b";

/*$fred = "массив";

echo (is_array($fred)) ? "это массив" : "Это не массив";


echo count($fred);
echo count($fred, 1);*/


// $temp = explode(' ', "Это предложения из пяти слов");
// print_r($temp);


//$roles = [
//    [
//        'name' => 'admin',
//        'value' => 'admin'
//    ]  ,
//    [
//        'name' => 'cas',
//        'value' => 'cas'
//    ]  ,
//    [
//        'name' => 'ct',
//        'value' => 'ct'
//    ]  ,
//  ];
//
//   $names = array_column($roles, 'name');
//
//        $value = array_map(function ($ar) {return $ar['value'];}, $roles);
//
//        print_r($value);

// $arr = [
//     'v1' => 'Первый выпуск',
//     'v2' => 'Второй выпуск',
//     'v3' => 'Третий выпуск',
// ];
// $callback = fn(string $k, string $v): string => "$k - это $v";

// $result = array_map($callback, array_keys($arr), array_values($arr));

// var_dump($result);


//function createPhoneNumber($a) {
//    return "($a[0]$a[1]$a[2]) $a[3]$a[4]$a[5]-$a[6]$a[7]$a[8]$a[9]";
//
//}


//function detect_pangram($array)
//{
//    $array = array(
//        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
//        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
//    );
//    if (preg_match("[a-zA-Z]", $array)) {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//
//function odd_or_even(array $i): string {
//    $i = 0;
//
//    while ($i <= 10){
//        if ($i % 2 == 0) {
//            echo $i .' "=Even,"' . PHP_EOL;
//        }else  {
//            echo $i .' "=Odd,"' . PHP_EOL;
//        }
//        $i++;
//    };
//
//};

//public function __toString() {
//    if(is_null($this->users_class)) {
//        return 'NULL';
//    }
//    return $this->user_class;
//}

//$numbers = "2012-421-020-120407";
//$numbers_array = explode( "-", $numbers );
//
//print_r( $numbers_array );
//
//foreach ( $numbers_array as &$number )
//    $number .= ( $number % 2 == 0 ) ? 0 : 1 ;
//
//print_r( $numbers_array );


//$myVar = 15;
//var_dump($myVar);
//
//$myVar = (string)$myVar;
//var_dump($myVar);




//for($i=1;
//$i<13;
//$i++)
//{
//    if($i % 2)
//    {
//        echo $i.' - четное.<br>';
//    }
//    else
//    {
//        echo $i.' - нечетное.<br>';
//    }
//}


//function odd($var)
//{
//    return $var & 1;
//}
//function even($var)
//{
//    return !($var & 1);
//}
//
//$array1 = ['a' => 1, 'b' => 3,'e' => 5];
//$array2 = [6, 7,  12, 12];
//
//return ($sum = array_sum($array1)); '; '; ($sum % 2 ? 'не' : ";"); 'четное число' . PHP_EOL;
//return ($sum = array_sum($array2)); '; ' ($sum % 2 ? 'не' : ";"); 'четное число' . PHP_EOL;



//$str = 'Hello! abror sultanov';
//$new_str = strtoupper($str);
//echo $new_str;

// 1. написать функцию который сложит 2 числа
// 2. взять результат в переменную $c

//function sum($a, $b) {
//    return $a + $b;
//}
//$c = sum(3, 5);

// написать класс который будет сложить каждое переданное число и при запросе отдает сумму
// например:
// передаем 1
// передаём 5
// передаем 9
// просим результат
// класс возвращает 15

//class Sum
//{
//    public $sum;
//
//    public function __construct($sum) {
//        $this->sum = $sum;
//    }
//
//    public function say() {
//        print_r($this->sum);
//    }
//}
//
//$sum = new Sum(1 + 5 + 9);
//$sum->say();


//class Summa
//{
//    private int $sum = 0;
//    public function setSum(int $sum) {
//        $this->sum += $sum;
//    }
//
//    public function getSum()
//    {
//        return $this->sum;
//    }
//}
//
//$a = new Summa();
//$a->setSum(1);
//$a->setSum(5);
//$a->setSum(9);
//$a->setSum(7);
//print_r($a->getSum());



//function litres(float $t): int {
//    if ($t === 1) {
//        return floor($t * 0.5);
//    } else {
//        return $t + " litres";
//    }
//}

                            // ПОЛОЖИТЕЛЬНЫЕ В ОТРИЦАТЕЛЬНЫЕ И НАОБОРОТ

//function invert(array $a): array {
//    $a = -abs($a);
//    return $a;
//}
//print_r($a);

//$num = [2 ,4, 5];
//$num = -1 * abs($num);

//$num = $num <= 0 ? $num : -$num;
//print_r($num);



//function invert(array $a): array {
//    array_map($a);
//    return ($a * -1);
//}


//function invert(array $a): array {
//    $new_a = [];
//    foreach($a as $value) {
//        $new_a [] = $value * (-1);
//    }
//    return $new_a;
//}
//var_dump(invert([2, 3, -4, -5]));


//function cube($n)
//{
//    return ($n * -1);
//}
//
//$a = [1, 2, 3, 4, -3, -5, 5];
//$b = array_map('cube', $a);
//print_r($b);

//function add(int $a) {
//    return $a * -1;
//}
//$a = [1, 2, 3, 4, -3, -5, 5];
//$b = array_map('add', $a);
//print_r($b);

                     //     МИЛЕСЕКУНДЫ

//function past($h, $m, $s) {
//
//    return ($h * 3600 + $m * 60 + $s) * 1000;
//}
//var_dump(past(10, 38, 25));


//$milliseconds = floor(microtime(true) * 1000);
//echo $milliseconds;
//function past($h, $m, $s) {
//    return 1000 * ($s + 60 * ($m + 60 * $h));
//}


                    // УДАЛЕНИЕ ЗНАКОВ
//$i ="Сначала пришел! потом увидел! и победил!";
//echo $i . PHP_EOL ;
//$format = str_replace('!','',$i);
//echo $format;

//function remove_exclamation_marks($string) {
//    $format = str_replace('!', '', $string);
//}
//var_dump(remove_exclamation_marks('benjb! sfglsu! buli!'));


//function remove_exclamation_marks($string)
//{
//    return str_replace('!', '', $string);
//}

                        //  ПЕРЕОБРАЗОВАНИЕ СТРОКУ В МАССИВ

//function string_to_array($s){
//    return explode(" ",  $s);
//}


//$a = 'fnfdg, dgnerui, rgner';
//$b = explode(", ", $a);
//print_r($b);


                        // общая сумма массива

//function sum_mix($a) {
//    return  array_sum($a);
//}
//var_dump(sum_mix([3, 5, 6,  6, 7]));


//function reverseSeq ($n) {
//    $n = $n > 0;
//    $n = range(1, 5);
//    return $n;
//};
//var_dump(reverseSeq([1, 5]));



                        // Возведение в квадрат и общая сумма

//function square_sum($numbers) : int {
//    return array_sum($numbers) ** 2;
//}
//var_dump(square_sum([1, 2, 2]));



//function square_sum($numbers) : int {
//    $sum = 0;
//    foreach($numbers as $number) {
//        $sum += $number ** 2;
//    }
//    return $sum;
//}
//
//var_dump(square_sum([1, 2, 2]));






                        // переобразование массива в строку
//function smash(array $words): string {
//    return implode(" ", $words);
//}
//var_dump(smash(['hello', 'abror', 'sultanov']));


                                // измерение роста и веса
//function bmi($weight, $height)
//{
//    $bmi = $weight / ($height**2);
//    if ($bmi <= 18.5) {
//        $output = "Under Weight";
//    } else if ($bmi > 18.5 and $bmi <= 24.9) {
//        $output = "Normal Weight";
//    } else if ($bmi > 24.9 and $bmi <= 29.9) {
//        $output = "Over Weight";
//    } else if ($bmi > 30.0) {
//        $output = "OBESE";
//    }
//    return $output;
//}
//
//var_dump(bmi(90, 1.70));
//var_dump(bmi(80,1.65));
//var_dump(bmi(70, 1.50));



                        //число меньше 5 выводит 0 а если больше то 1
//function fake_bin(string $s): string {
//    $a = '';
//    for ($i = 0; $i < strlen($s); $i++) {
//        if ($s[$i] < 5) {
//            $a .= '0';
//        } else {
//            $a .= '1';
//        }
//    }
//    return $a;
//}
//var_dump(fake_bin('3657324754'));


//$array = array("Geek1", "Geek2",
//    "Geek3", "1", "2","3");
//foreach($array as $item){
//    echo $item . "\n";
//}


                            // число в строку


//$a = 2;
//$a = $a = $a . "";
//var_dump($a) . PHP_EOL;
//
//function numberToString($num)
//{
//    $num = $num = $num . "";
//    return $num;
//}
//var_dump(numberToString(123));


                                // логический значения true и false

//function boolToWord($bool){
//    return $bool ? 'Yes' : 'no';
//}
//var_dump(boolToWord('5'));



                        // удвоение целого числа
//function doubleInteger($i)
//{
//    $i = $i + $i;
//    return $i;
//}
//var_dump(doubleInteger(3));


                        // ПРОВЕРКА ЗНАЧЕНИЕ МАССИВА
//function solution($a, $x) {
//        return in_array($x, $a);
//}
//var_dump(solution(['product'], 'продукт'));


//$os = array("Mac", "NT", "Irix", "Linux");
//if (in_array("Isf", $os)) {
//    echo "Нашел Irix";
//}
//if (in_array("mac", $os)) {
//    echo "Нашел Mac";
//}



//function square_sum($numbers) : int {
//    $sum = 0;
//    foreach($numbers as $number) {
//        $sum .= $number ** 2 + "";
//    }
//    return $sum;
//}
//
//var_dump(square_sum('9119'));




//function isIsogram($string) {
//    $string = strtolower($string);
//    foreach ($string as $item) {
//        if ($string.strlen($item) > 1) {
//            return false;
//        } else {
//            return true;
//        }
//    }
//    return $string;
//}
//var_dump(isIsogram('abror'));
//


//function isIsogram($string) {
//    return count_chars($string, 1) == count_chars($string, 1);
//}
//var_dump(isIsogram('abror'));


//function isAnagram(string $string1, string $string2)
//{
//    return count_chars($string1, 1) == count_chars($string2, 1);
//}
//var_dump(isAnagram("нет", "да"));



                        // ПЕРЕВЕРНУЛ КАЖДЫЙ СЛОВА
//function reverseWords($str) {
//    $str = implode(' ', array_map('strrev', explode(' ', $str)));
//    return $str;
//}
//var_dump(reverseWords('This is an example!'));


                            // КАЖДЫЙ СЛОВА С ЗАГЛАВНОЙ БУКВОЙ
//function toJadenCase(string $string): string
//{
//    return ucwords($string);
//}
//var_dump(toJadenCase( "How can mirrors be real if our eyes aren't real"));





                                // ОБЩАЯ СУММА МАСССИВА
//function sum(array $a): float {
//    return array_sum($a);
//}
//var_dump(sum([1, 5.2, 4, 0, -1]));


                                // ДОБАВЛЕНИЕ ИМЕНИ В ТЕКСТ
//function greet($name) {
//    return "Hello $name, how are you doing today?";
//}
//var_dump(greet('Abror'));




                                // ДЛИНА САМОГО КОРОТКОГО СЛОВА
//function findShort($str){
//    $words = explode(" ", $str);
//    $strs = strlen($words[0]);
//
//    foreach ($words as $word) {
//        $len = strlen($word);
//        if ($len < $strs) {
//            $strs = $len;
//        }
//    }
//    return $strs;
//}
//var_dump(findShort('sdfgs no ster'));



                            // ПРОВЕРКА НА ОДИКОВЫХ КОЛ-ВО БУКВ
//function XO($s) {
//    $ka = false;
//    $s = strtolower($s);
//    if (strpbrk($s,'x') || strpbrk($s,'o')) {
//        if (substr_count($s,'x') == substr_count($s,'o')){
//            $ka = true;
//        }
//    }
//    else {
//        $ka = true;
//    }
//    return $ka;
//}
//var_dump(XO('xxoxo'));



                                // УМНОЖЕНИЕ КОЖДОГО ЧИСЛА
//function grow($a) {
//    $ar = 1;
//    for ($i = 0; $i < count($a); $i++){
//        $ar *= $a[$i];
//    }
//    return $ar;
//
//}
//var_dump(grow([2, 3, 4, 2]));




                                // через сколько лет отец станет в два раза больше сына
//function twice_as_old($dad_years_old, $son_years_old) {
//    return abs($dad_years_old - $son_years_old * 2);
//
//}
//var_dump(twice_as_old(52, 23));



                                    // слово наоборот
//function solution($str) {
//    return strrev($str);
//}
//var_dump(solution('world'));



                                    // порядок цифр по убыванию
//function descendingOrder(int $n): int {
//    if ($n < 0) {}
//    $numarray = str_split($n);
//    rsort($numarray);
//    return implode($numarray);
//}
//var_dump(descendingOrder(283449627));



                                // ПРОВЕРКА НА ПРИСУТСТВИЕ
function countSheep($arr) {
    return $arr.count_chars(true);
}
var_dump(countSheep(17));