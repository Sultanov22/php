<?php

/*printf("Результат: $%.2f", 123.42 / 12);


printf("Результат равен $%15f\n", 123.42 / 12);


printf("Результат равен $%015f\n", 123.42 / 12);

printf("Результат равен $%15.2f\n", 123.42 / 12); */



/*$h = 'Rasmus';

printf("[%s]\n",   $h);
printf("[%12s]\n",  $h);
printf("[%-12s]\n",  $h);
printf("[%012s]\n",   $h);
printf("[%'#12s]\n\n",   $h);*/




/*$hexstring = sprintf("%X%X%X", 65, 127, 245);
$out = sprintf("Результат: $%.2f", 123.42 / 12);
echo $out;*/


#echo time() + 7 * 24 * 60 * 60;


/*$month = 9;
$day = 25;
$year = 2018;

if (checkdate($month, $day, $year)) echo "Допустимая дата";
else echo "Недопустимая дата";*/




########################РАБОТА С ФАЙЛАМИ №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№

#if (file_exists("testfile.txt")) echo "Файл существует";



/*$fh = fopen("testfile.txt", 'w') or die();
$text = <<<_END
Строка 1
Строка 2
Строка 3
_END;
fwrite($fh, $text) or die("Сбой записи файла");
fclose($fh);
echo "Файл 'testfile.txt' записан успешно ";
*/


/*$a = fopen("homefile.txt", 'w');
$text = <<<_END
Abror
Sultanov
_END;
fwrite($a, $text);
echo "Файл 'homefile.txt' создан успешно";
*/

#if (file_exists("homefile.txt")) echo "Файл существует";

/*$a = fopen("homefile.txt", 'r');


$line = fread($a, 100);
fclose($a);
echo $line;*/


/*copy('homefile.txt', 'homefile2.txt');
echo "Файл успешно скопирован";*/


/*if(!unlink('homefile2.txt')) echo "Удаления не возможно";
else echo "Файл 'homefile2.txt'  удален успешно";
*/


/*$a = fopen("homefile.txt", 'r+');
$text = fgets($a);

fseek($a, 1, SEEK_END);
fwrite($a, "$text");
fclose($a);

echo " Файл 'homefile.txt' успешно обнавленно ";
*/

/*
$a = fopen("homefile.txt", 'r+');
$text = fgets($a);

if (flock($a, LOCK_EX))
{
    fseek($a, 0, SEEK_END);
    fwrite($a, "$text");
    flock($a, LOCK_UN);
}

fclose($a);
echo "Файл 'homefile.txt' успешно обнавлен";
*/


#echo file_get_contents("homefile.txt");


#$name = ereg_replace("[^A-Za-z0-9.]", "", $name);

$name = strtolower(ereg_replace("[^A-Za-z0-9.]", "", $name));
