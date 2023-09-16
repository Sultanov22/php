<?php
/*$object = new User;
print_r($object); echo ". PHP_EOL";

$object->name ="abror";
$object->password = "king";
print_r($object); echo ". PHP_EOL";

$object->save_user();


class User
{
    public $name, $password;

    function save_user()
    {
        echo "сюда помещается код, сохраняющий данный пользователя";
    }
}



$object1        = new User();
$object1 ->name ="Alice";
$object2        = clone $object1;
$object2->name = "Amy";

echo "object1  name = " . object1->name . PHP_EOL;
echo "object2 name = " . object2->name . PHP_EOL;*/


/*class User
{
    public $name, $password;
    function get_password()
    {
        return $this->password;
    }
}

$object          = new User;
$object->password = "king";
echo $object->get_password();*/

/*Translate::lookup();

class Translate
{
    const ENGLISH = 0;
    const SPANICH = 1;
    const FRENCH = 2;
    const GERMAN = 3;

    static function lookup()
    {
        echo self::SPANICH;
    }
}
*/



/*$temp = new Test();
echo "Test A: " . Test::$static_property . PHP_EOL;
echo "Test B: " . $temp->get_sp() . PHP_EOL;
echo "Test C: " . $tempm->static_property . PHP_EOL;

class Test
{
    static $static_property =" Это статическое свойства";
    function get_sp()
    {
        return self::$static_property;
    }
}*/

/*$object = new Subscriber;
$object->name = "Abror";
$object->password = "king";
$object->phone = "0500083880";
$object->email = "sultanov678@gmail.com";
$object->display();

class User 
{
    public $name, $password;
    function save_user()
    {
        echo "Сюда пишется код";
    }
}

class Subscriber extends User 
{
    public $phone, $email;

    function display()
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Pass: " . $this->password . PHP_EOL;
        echo "Phone: " . $this->phone . PHP_EOL;
        echo "Email: " . $this->email . PHP_EOL;
    }
}
*/


/*$object = new Son;
$object->test();
$object->test2();

class Dad
{
    function test()
    {
        echo  "[Class Dad] Я твой отец" . PHP_EOL;

    }
}
class Son extends Dad
{
    function test2()
    {
        parent::test();
    }
}*/

/*$object = new Tiger();
echo "У тигров есть ... " . PHP_EOL;
echo "Mex: " . $object->fur . PHP_EOL;
echo "полосы: " . $object->stripes;

class Wildcat
{
    public $fur; 

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();

        $this->stripes = "TRUE";
    }
}*/

/*
class User 
{
    final function copyright()
    {
        echo "Этот класс был создан Джо Смитом";
    }
}*/




