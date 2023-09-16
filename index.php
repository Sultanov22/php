<?php
   /*$username = "sultanov abror"; 
    echo  $username . PHP_EOL;
    echo "<br>";
    $current_user = $username . PHP_EOL;
    echo $current_user; */

    /*$oxo = array(array('x', ' ', 'o') . PHP_EOL,
                array('o', 'o', 'x') . PHP_EOL,
                array('x','o', ' ') . PHP_EOL);
                echo $oxo[1],[2];*/

    /*$author = "Abror Sultanov";
    echo $author .PHP_EOL;
    $text = "Аброр Султанов, студент ошского технологического университета 
    выпускной курс
    -$author.";
    echo  $text;*/

    //$author = "sultanov";

   /* $out = <<<_END
    Normal people believe that if it ain't broke, don't fix it.
    Engineers believe that if it ain't broke, it doesn't have enough
    features yet.
    -$author.
    _END;
    echo $out;*/

   /*$number = 12345 * 67890;
    echo substr($number, 3, 1);*/


                                    # функция

    /*function longdate($timestamp)
    {
      return date("l F jS Y", $timestamp);
    }
         echo longdate(time());*/

   /*function longdate($timestamp)
   {
      return date("d m jS y", $timestamp);
   }
      echo longdate(time() -12 * 20 * 40 * 50);*/

/*function test()
{
   static $count = 2;
   echo $count;
   $count++;
}*/



 /*  $days_to_new_year = 366 - $day_number;
   if ($days_to_new_year < 30)
   {
      echo "скоро новый год!";
   }*/

                 #оператор равенстов и тожденство

/*$a = "1000";
$b ="+1000";
if ($a == $b) echo "1";
if ($a ===$b) echo "2";*/



                 #оператор неравенстов и нетожденство

/*$a = "1000";
$b ="+1000";
if ($a != $b) echo "1";
if ($a !==$b) echo "2";*/


                  #Оператор сравнения

/*$a = 10;
$b = 10;

if ($a > $b)   echo "$a больше $b";
if ($a < $b) echo "$a меньше $b";
if ($a >= $b) echo "$a больше или равно $b";
if ($a <= $b) echo "$a меньше или равно $b";*/



                  #Логические операторы
                  

/*$a = 1;
$b = 0; 

echo ($a AND $b);
echo ($a OR $b);
echo ($a XOR $b);
echo !$a ;*/


                       #Инструкция if, else,elseif

/*if ($bank_balance < 100)
{
   $maney = 1000;
   $bank_balance += $maney;
}
elseif ($bank_balance > 200)
{
   $savings +=100;
   $bank_balance -=100;

}
{
   $savings  += 50;
   $bank_balance -=50;

}*/


                      #Инструкция switch
 
/*$page = "About";
switch ($page )
{
   case "Home":
      echo "Вы выбрали Home";
      break;
   case "About":
      echo "Вы выбрали About";
      break;
   case "News":
      echo "Вы выбрали News";
      break;
   case "Login":
      echo "Вы выбрали Login";
      break;
   case "Links":
      echo "Вы выбрали Links";
      break;   
}*/


#echo $fuel <= 1 ? "Требуется до заправка" : "Топливо еще достаточно";
#$enough =  $fuel <= 1 ?  FALSE : TRUE;