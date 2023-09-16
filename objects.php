<?php
/*
class Product
{
    public $title = "Стандартный товар ";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора ";
    public $price = 0;  

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producertFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->pirce = $price;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
                . $this->producerMainName;
    }
}
    
$product1 = new Product("Роман", "Булгаков", "Михаил", 5.99 );


$product1->title = "Роман";
$product1->producerMainName = "Булгаков";
$product1->producerFirstName = "Михаил";
$product1->price = 5.99;



class Car
{
    public $title;
    public $model;
    public $release;
    public $volume;

    public function __construct($title, $model, $release, $volume)
    {
        $this->title = $title;
        $this->model = $model;
        $this->release = $release;
        $this->volume = $volume;
    }


    public function getCar()
    {
        $base = "{$this->title} ({$this->model}";
        $base = "{this->release})";
        return $this->title . " " . $this->model . " " . $this->release . " " . $this->volume;
    }
}

$car1 = new Car("Mercedes-Benz", "maybach", 2022, 3.5);

print "Марка: {$car1->getCar()}";
*/

/*class AddressManager
{
    private $adresses = ["209.131 .36.159",  "216.58 . 213.174 " ];
    public function outputAddresses($resolve)
    {
        foreach ($this->addresses as $address)
        {
            print $address;
            if ($resolve) {
                print "(".gethostbyaddr($address).")";
            }
            print "\n";
        }
    }
}

$settings = simplexml_load_file (__DIR__ . "/resolve.xml");
$manager = new AddressManager();
$manager -> outputAddresses (( string)$settings ->resolvedomains) ;*/




/*class ProductWriter
{
    public function writer($Product)
    {
        $str = $Product->title . ":" . $Product->getProducer() . "(" . $Product->price .")";
        print $str;
    }
}
$product1 = new Product("Роман", "Булгаков", "Михаил", 5.99 );
$writer = new ProductWriter();
$writer->writer($product1);*/



/*

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages = 0, int $playLength = 0)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playlength = $playLength;
    }

    public function getProducer(): string 
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}


class CDProduct extends ShopProduct
{
    public function getPlayLength(): int 
    {
        return $this->playLength;
    }
    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        $base .=": Время звучания - {$this->playLingth}";
        return $base;
    }
}


class BookProduct extends ShopProduct
{
    public function getNumberOfpages(): int 
    {
        return $this->numPages;
    }
    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ({$this->producerMainName},";
        $base .= "{$this->producerFirstzName} )";
        $base .= ":{$this->numPages} стр.";
        return $base;
    }
}


$product2 = new CDProduct("Классическая музыка. Лучшее", "Антонио","Вивальди", 10.99, 0, 60.33);
print "Композитор: {$product2->getProducer()}";*/




/*
class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages = 0, int $playLength = 0)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playlength = $playLength;
    }

    public function getProducer(): string 
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    public function getNumberOfpages(): int 
    {
        return $this->numPages;
    }
    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ({$this->producerMainName},";
        $base .= "{$this->producerFirstzName} )";
        $base .= ":{$this->numPages} стр.";
        return $base;
    }
}


class CDProduct extends ShopProduct
{
    public $playLength;
    public function __construct(string $title, string $firstName, string $mainNeme, float $price, int $playLength)
    {
        parent::__construct( $title , $firstName , $mainName , $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength(): int 
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string 
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        $base .=": Время звучания - {$this->playLingth}";
        return $base;
    }
}





$product2 = new CDProduct("Классическая музыка. Лучшее", "Антонио","Вивальди", 10.99, 0, 60.33);
print "Композитор: {$product2->getProducer()}";
*/


/*
class staticExsample
{
    public static int   $aNum = 0;
    public static function sayHello():void
    {
        print "Привет!";
    }
}

print StaticExsample::$aNum;
StaticExsample::sayHello();

class staticExsample
{
    public static int   $aNum = 0;
    public static function sayHello():void
    {
        self::$aNum++;
        print "Привет! (" . self::$aNum . ")";
    }
}
*/


/*
abstract class DomainObject
{
    private string $group;
    public function __construct()
    {
        $this->group = static::getGroup();
    }
    public static function create(): DomainObject
    {
        return new static();
    }
    public static function getGroup():string
    {
        return "default";
    }
}

class User extends DomainObject
{
}


class Document extends DomainObject
{
    public static function getGroup(): string 
    {
        return "document";
    }
}

class SpreadSheet extends Document
{

}

print_r(User::create());
print_r(SpreadSheet::create());*/


/*
class Runner
{
    public static function init():void 
    {
        try
        {
            $fh = fopen ("/tmp/ log.txt " , "a ");
            fputs( $fh , "Начало \ п ");
            $conf = new Conf( dirname (FILE) . " / conf . broken . xml" );
            print "user: " . $conf->get(' user');
            print "host:" . $conf->get('host');
            $conf->set("pass", "newpass " );
            $conf->write();
        }
            catch (FileException $e)
            {
            // Файл не существует или недоступен
            fputs($fh , "Проблема с файлом");
            throw $е;
            }
            catch (XmlException $е )
            {
            fputs($fh , "Проблема с xml");
            // Поврежденный XML - файл
            }
            catch ( ConfException $е)
            {
            fputs ($fh, "Проблема конфигурации");
            // Неверный формат XML - файла
            }
            catch (\Exception $е )
            {
            fputs($fh , "Непредвиденные проблемы") ;
            // Ловушка: этот код не должен вызываться
            }
            finally
            {
            fputs($fh , "Конец \п ");
            fclose ($fh);
            }
        }
    }
*/





/*
class Person
{
    public function __get(string $property): mixed
    {
        $method = "get{$property}";
        if (method_exists($this, $method))
        {
            return $this->$method();
        }
    }
    public function getName(): string 
    {
        return "Меня завут, Abror";
    }
    public function getAge(): int
    {
        return  22;
    }
    public function __isset(string $property): bool 
    {
        $method = "get{$property}";
        return (method_exists($this,$method));
    }
}

$a = new Person();
if (isset($a->name))
{
    print $a->name . PHP_EOL;
    print $a->age . PHP_EOL;
}




































/*
class Person
{
    private ? string $myname;
    private ? int $myage;
    public function __set(string $property, mixed $value):void 
    {
        $method = "set{$property}";
        if (method_exists($this, $method))
        {
            $this->$method($value);
        }
    }
    public function setName (? string $name): void 
    {
        $this->myname = $name;
        if (! is_null($name))
        {
            $this->myname = strtoupper($this->myname);
        }
    }
    public function setAge( ? int $age):void 
    {
        $this->myage = $age;
    }
}

$a = new Person();
$a->name = "Abror";
*/

/*
class Address 
{
    private string $number;
    private string $street;
    public function __construct(string $maydenumber, string $maybestreet = null)
    {
        if (is_null($maybestreet))
        {
            $this->streetaddress = $maybenumber;
        }
        else
        {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }
    public function __set(string $property, mixed $value): void 
    {
        if ($property ==="streetaddress")
        {
            if (preg_match("/^(\d+.*?) [\s,]+(.+)$/", $value, $matches))
            {
                $this->number = $matches[1];
                $this->street = $matches[2];
            }
            else 
            {
                throw new 
                \Exception("Ошибка анализа адреса: '{$value}'");
            }
        }
    }
    public function __get(string $property): mixed
    {
        if ($property ==="streetaddress")
        {
            return $this->number . " " . $this->street;
        }
    }
}

$address = new Address("315а Уйгурабат");
print_r($address);*/

/*
class Person
{
    private int $id;
    public function __construct(protected string $name, private int $age)
    {
        $this->nmae = $name;
        $this->age = $age;
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }
    public function __destruct()
    {
        if (! empty($this->id))
        {
            print "Сохранение Person";
        }
    }
}

$person = new Person("Abror", 22);
$person->setId(343);
unset($person);



class Person
{
    private int $id;
    public function __construct(protected string $name, private int $age)
    {
        $this->nmae = $name;
        $this->age = $age;
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }
    public function __clone(): void
    {
        $this->id = 0;
    }
}
$person = new Person("Abror", 22);
$person->setId(343);
$person2 = clone $person;





class Person
{
    public function getName():string 
    {
        return "Abror";
    }
    public function getAge():int 
    {
        return 22;
    }
    public function __toString(): string 
    {
        $desc = $this->getName() . PHP_EOL .  "(возраст" . PHP_EOL;
        $desc .= $this->getAge() . "лет)";
        return $desc;
    }
}

$person = new Person();
print $person;
*/


/*

class Product
{
    public function __construct(public string $name, public float $price)
    {

    }
}


class ProcessSale 
{
    private array $callbacks;
    public function registerCallback(callable $callback): void 
    {
        $this->callback[] = $callback;
    }
    public function sale(Product $product): void 
    {
        print "{$product->name}: обрабатывается";

        foreach ($this->callbacks as $callback)
        {
            call_user_func($callback, $product);
        }
    }
}

$logger = function($product)
{
    print " Запись ({$product->name})";
};
$processor = new ProcessSale();
$processor->registerCallback($logger);
$processor->sale(new Product("Туфли", 6));
print PHP_EOL;
$processor->sale(new Product("Кофе", 6));



class Totalizer
{
    public static function warnAmount(): callable
    {
        return function(Product $product)
        {
            if ($product->price > 5)
            {
                print "Достигнута высокая цена: {$product->price} ";
            } 
        }; 
    }
}


$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount());
$processor->sale(new Product("Туфли", 6));
print  PHP_EOL;
$processor->sale(new Product("Кофе", 6));
*/



/*
class Blah
{
    public function wave(): void 
    {
        print "saying hi from root";
    }
}

$basic = function(string $classname)
{
    $file = __DIR__ . "/" . "{classname}.php";
    if (file_exists($file))
    {
        require_once($file);
    }
};

\spl_autoload_register($basic);
$blah = new Blah();
$blah->wave();
*/

/*
class util_Blah
{
    public function wave(): void 
    {
        print "Привет из файла с подчеркиваниями";
    }
}

$underscores = function(string $classname)
{
    $path = str_replace('_', DIRECTORY_SEPARATOR, $classname);
    $path = __DIR__ . "/$path";
    if (file_exists("{$path}.php"))
    {
        require_once("{$path}.php");
    }
};

\spl_autoload_register($underscores);
$blah =new util_Blah();
$blah->wave();



$base = __DIR__;
$classname = "Task";
$path = "{$base}/tasks/{classname}.php";
if (! file_exists($path))
{
    throw new \Exception("файл {$path} не найден");
}
 
require_once($path);
$qclassname = "tasks\\$classname";
if (! class_exists($qclassname))
{
    throw new Exception("Класс {$qclassname} не найден");
}

$myObj = new $qclassname();
$myObj->doSpeak();


$prodclass = new \ReflectionClass(Product::class);
print $prodclass;



class ReflectionUtil
{
    public static function getClassSource(\ReflectionClass $class): string 
    {
        $path = $class->getFileName();
        $lines = @file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }
}

print ReflectionUtil::getClassSource(
    new \ReflectionClass(Car::class)
);


abstract class ParamHandler
{
    protected array $params = [];
    public function __construct(protected string $source)
    {
      
    }
    public function addParam(string $key, string $val): void 
    {
        $this->params[$key] = $val;
    }
    public function getAllParams(): array
    {
        return $this->params;
    }
    public static function getInstance(string $filename): ParamHandler
    {
        if (preg_match("/\.xml/i", $filename))
        {
            return new XmlParamHandler($filename);
        }
        return new textParamHandler($filename);
    }
    abstract public function aaa(): void;
    abstract public function bbb(): void;
}

*/



class Eat
{

}
 
class Drenc
{

}

class Human extends Eat 
{

}