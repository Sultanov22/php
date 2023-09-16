<?php
/*$fuel = 10;

whele ($fuel > 1)
{
    // Едим дальше 
    echo "Еще можем ехать"; 
}*/


/*$count = 1; 
whele (cout <=12)
echo "Число $count, умноженой на 12, равно" . $count * 12;
++$count;*/


/*$count = 0;
while (++$count <= 12)
echo "Число $count, умноженное на 12, равно " . $count * 12;*/

/*$count = 1;
do
echo "Число $count, умноженное на 12, равно " . $count * 12;
while (++$count <= 12);*/


/*$count = 1;
do {
echo "Число $count, умноженное на 12, равно " . $count * 12;
echo "<br>";
} while (++$count <= 12);*/



/*$a = "SULTANOV";
$a2 = "abror";
$a3 = "gaTES";

echo $a1 . " " . $a . " " . $a3  .  PHP_EOL;
fix_names();
echo $a1 . " " . $a . " " . $a3;

function fix_names()
{
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));

}*/
#однократное включения файла
#include_once "library.php";
# сида пишем код 
# однократный востребования файла
#require_once "library.php";
#дальше пишем код

if (function_exists("array_combine"))
{
    echo "Функция существует";
}
else
{
    echo "Функция не существует, желательно создать ее";
}
