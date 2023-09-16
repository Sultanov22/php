<?php

/*$a =21;

$a +=19;

echo $a . PHP_EOL;


$s = 129;

$s -= 50;
echo $s . PHP_EOL;


$d = 20;
$d *= 3;
echo $d . PHP_EOL;

$z = 100;
$z /= 5;
echo $z . PHP_EOL;


$c = 29;
$c .= 10;
echo $c . PHP_EOL;

$w = 17;
$w %=4;
echo $w;*/


/*$count = 'понидельник';


if ($count == 'понидельник' and $count =='вторник')  study();


$a = 12;
if ($a >12 && $a<14) dolunch();*/


/*$a = 4;
$a +=3;

echo "Сейчас вас " . $a . "человека в семье";*/





/*$author = "Steve Ballmer";
echo "Developers, Developers, developers, developers,
developers,developers, developers, developers, developers!
- $author.";*/




/*$author = "Bill Gates";
$text = "Measuring programming progress by lines of code is like
measuring aircraft building progress by weight.
- $author.";*/


#$a = 10;
#$a ? print "TRUE" : print "FALSE";



/*function longdate($timeshtap)
{
    return date("l F Y", $timeshtap);
}
echo longdate(time());*/


/*$a = 1;
include 'b.inc';
echo $a;*/



/*$a = "Я пришел на собрания в: ";
echo longdate($a, time());

function longdate($text, $timeshtap)
{
    return $text . date("l F Y",  $timeshtap);
}*/



/*$a = "Я пришел на собрания в: ";
echo longdate($a, time());

function longdate($text, $timeshtap)
{
    return $text . date("d m y",  $timeshtap);
}
*/

/*function test()
{
    static $count = 0;
    $count++;
    echo "$count";
}
for ($i = 1; $i ++<10;) test();*/



/*function test()
{
    static $count = 0;
    $count++;
    echo "$count";
}
for ($i = 5; $i ++<10;) test();*/





/*function test()
{
    static $count = 0;
    $count++;
    echo "$count";
}
for ($i = 8; $i ++<25;) test();*/



$result = 2 ** 3;
#echo $result;


/*$balans = 400;
if ($balans <500)
{
    $money = 1600;
    $balans +=$money;
}
echo $balans;*/


/*$balans = 100;
if ($balans > 50)
{
    $money = 100;
    $balans +=$money;
}

echo $balans;*/








/*
$balans = 100;
$savings = 500;
if ($balans < 1000)
{
    $money = 1000;
    $balans +=$money;
}
else
{
    $savings += 50;
    $balans -= 100;
}

echo $balans;
*/


/*
$count = 6;
if ($count > 5)
{
    echo "еще можем ехать";
}
else 
{
    $count <3;
    echo "нужно заехать в заправку";
}
while ($count < 1)
{
    echo "Топливо не достаточно";
}
*/

/*$count = 12;
do {
    echo "число $count, разделенно на 3, равно" . $count / 3;
}while  (++$count <=3);*/


/*$j = 10;
while ($j > 5)
{
$j--;
if ($j == 0) continue;
echo (10 / $j);
}*/


/*$a = 20;
while ($a > 5)
{
    $a++;
    if ($a == 10) continue;
    echo(10/$a);
}*/



$b = 11;
while ($b >10)
{
    $b--;
    if ($b > 10) continue;
    echo (5 *$b);
}