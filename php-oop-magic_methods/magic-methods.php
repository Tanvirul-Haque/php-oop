<?php

use student as GlobalStudent;

class person{
    public $name = "nishat";
    private $number = 12345;

   
    public function __toString()
    {
        return "name: $this->name . number: $this->number<br>";
    }
}

$detail= new person();
echo $detail;

//-------------------------------------------------//

class studentt{
    public $name= "niloy";
    private $number = 12346;


    public function __toString()
    {
        return "name: $this->name . number: $this->number<br>";
    }
}

$mix= new studentt();
echo $mix;

//-------------------------------------------------//


class infos{
    public $name = "nihal";
    private $age= 21;

    public function __toString()
    {
        return "name: $this->name . age: $this->age<br>";
    }
}

$mic= new infos();
echo $mic;

//------------------------   tostring used  ----------------------------//

class persons{
    public $name = "shanto";
    private $age = 21;

    public function __get($personname)
    {
        if($personname === "username"){
            return $this->name;
        }
        return "property \"$personname\" does not exists";
    }
}

$info= new persons();
echo $info->username;

//-------------------------------------------------//


class friend{
    public $name = "shihab";
    private $number =112352;

    public function __get($pername)
    {
        if($pername === "usernames"){
            return $this->name;
        }
        return "property \ $pername\" does not exists";
    }
}

$mixed= new friend();
echo $mixed->usernames;

//-------------------------------------------------//


class friends{
    public $name = "omer";
    private $age = 21;

    public function __get($friendname)
    {
        if($friendname === "friendlist"){
            return $this->age;
        }
        return "property \ $friendname\ does not exists";
    }
}

$miv= new friends();
echo $miv->friendlists;

//---------------------------  get-method used  ----------------------------//


class infoc{
    public $name= "first";
    public $age =21;

    public function __set($name, $value)
    {
        var_dump($name,$value);
    }
}

$t= new infoc();
echo $t->username="nishat";

//-------------------------------------------------//

class friendc{
    public $name = "shihab";
    private $phone =1135464;

    public function __set($frname, $frvalue)
    {
        var_dump($frname,$frvalue);
    }
}

$y= new friend();
echo $y->closs= "shanto";

//-------------------------------------------------//


class animal{
    public $name= "monkey";
    private $king = "lion";

    public function __set($kiname, $kivalue)
    {
        if($kiname === "kings"){
            $this->name = $kivalue;
        }
    }
}

$f= new animal();
$f->kings= "the forest king";
echo $f->name;

//-------------------------------------------------//


class birds{
    public $first = "one";
    public $second = "two";

    public function __set($birname, $birvalue)
    {
        if($birname === "beautiful"){

            $this->first = $birvalue;
        }
    }
}

$r= new birds();
$r->beautiful = "The bird is so beautiful";
echo $r->first;

//----------------------------  set_method used  -----------------------------//


class man{
    public $name = "hamida";
    private $number = 24213553;

    public function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }

    public function getphone(){
        return $this->number;
    }
}

$i=new man();
echo $i->getphone();

//-------------------------------------------------//


class woman{
    public $name= "himel";
    private $address = "dhaka";

    public function __call($woname, $woarguments)
    {
        var_dump($woname,$woarguments);
    }

    public function getaddress(){
        return $this->address;
    }
}

$w= new woman();
echo $w->getaddress();

//-------------------------------------------------//


class students{
    public $name = "rakib";
    private $phone = 12345;

    public function __call($rkname, $arguments)
    {
        if($rkname === "getmobilephone"){
            return $this->getphone();
        }else if ($rkname === "setmobilephone"){
            $this->setphone($arguments);
        }
    }

    public function getphone(){
        return $this->phone;
    }

    public function setphone($phone){
        $this->phone = $phone;
    }
}
 

$c= new students();
echo $c->getmobilephone();

$c->setphone("1111111");
echo $c->getphone();

//-------------------------------------------------//


class diploma{
    public $name = "nishat";
    public $phone =231266;

    public function __call($niname, $niarguments)
    {
        if($niname === "getphoneset"){
            return $this->getphone();
        }else if ($niname === "setphoneset"){
            $this->setphone($niarguments);
        }
    }

    public function getphone(){
        return $this->phone;
    }

    public function setphone($phone){
        $this->phone = $phone;
    }
}

$mib=new diploma();
echo $mib->getphoneset();

$mib->setphone("4464646");
echo $mib->getphone();

//-------------------------------------call-method used-----------------------------------//

class lion{
    public $name="king";
    private $place= "forest";

    public function __invoke()
    {
        echo "The lion is a king in a forest<br>";
    }
}

$li=new lion();
echo $li();

//-------------------------------------------------------------------//


class tiger{
    public $name = "royel_bengol";
    private $place= "forest";

    public function __invoke()
    {
        echo "This is a tiger<br>";
    }
}

$ti= new tiger();
var_dump(is_callable($ti));
echo $ti();

//-------------------------------- used to invoke method------------------------------// 


class number{
    public $name;
    private $phone;

    public function __construct($name,$phone)
    {
        $this->first = $name;
        $this->second = $phone;
    }

    public function __sleep()
    {
        unset($this->phone);
            return ["name"];
    }
}

$nic= new number(name: "school" , phone: "college");
$serializec= serialize($nic);
$news= unserialize($serializec);
var_dump($news);

//-----------------------------------------------//

class numbers{
    public $name;
    private $phone;

    public function __construct($name,$phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function __sleep()
    {
        unset($this->phone);
        return ["name"];
    }
}

$micc= new numbers(name: "college", phone: "school");
$serialize= serialize($micc);
$net= unserialize($serialize);
var_dump($net);

//------------------------------------- sleep-method used-------------------------------------//


class student{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __wakeup()
    {
        echo "This is a wakeup method<br>";
    }
}

$newc= new student(name: "nishat" , age: 21);
$seri= serialize($newc);
$nit= unserialize($seri);
var_dump($nit);

//-------------------------------------------------------------//

class studentss{
    public $name;
    private $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __wakeup()
    {
        echo "The function is wakeup right now<br>";
    }
}

$mir= new studentss(name:"shanto",age:21);
$seria= serialize($mir);
$htm= unserialize($seria);
var_dump($htm);

//--------------------------------------wakeup method used-=-----------------------------------//


class animals{
    public $first;
    private $second;

    public function __construct($one,$two)
    {
        $this->first = $one;
        $this->second = $two;
    }

    public function __clone()
    {
        var_dump($this);
    }
}

$mit= new animals(one:"tiger",two: "lion");
var_dump($mit);
$newanimal= clone($mit);

//------------------------------------//

class animal2{
    public $first;
    private $second;

    public function __construct($one,$two)
    {
        $this->first = $one;
        $this->second = $two;
    }

    public function __clone()
    {
        var_dump($this);
    }
}

$zoo= new animal2(one:"lion", two: "tiger");
var_dump($zoo);
$zooanimal= clone($zoo);

//----------------------------------------clone-method used--------------------------------------//


class anime{
    public $first;
    private $second;
    
    static  $counter=0;
    public function __construct($one,$two)
    {
        $this->first = $one;
        $this->second = $two;
        self::$counter++;
    }

    public function __clone()
    {
        self::$counter++;
    }
}

$g= new anime(one: "shanto", two: "shihab");
$newg= clone $g;
echo anime::$counter;

//-------------------------------------------------------//

class animalc{
    public $first;
    private $second;
    static $counters=0;

    public function __construct($lion,$tiger)
    {
        $this->first = $lion;
        $this->second = $tiger;
        static::$counters++;
    }

    public function __clone()
    {
        self::$counters++;
    }
}

$b= new animalc(lion: "the king", tiger: "the forest");
$newb= clone $b;
echo animalc::$counters;

//------------------------------------------------------//


class friendv{
    public $first;
    private $second;

    static $cons= 0;
    public function __construct($shihab,$shanto)
    {
        $this->first = $shihab;
        $this->second = $shanto;
        self::$cons++;
    }

    public function __clone()
    {
        self::$cons++;
    }
}

$fri= new friendv(shihab: "closs",shanto : "closs");
$newfri= clone $fri;
$new2fri= unserialize(serialize($fri));
var_dump($fri,$newfri,$new2fri);
echo friendv::$cons;

//-------------------------------------------------------//


class studnt{

    public $name;
    private $address;

    static $info=0;

    public function __construct($omer,$dhaka)
    {
        $this->name = $omer;
        $this->address = $dhaka;
        self::$info++;

    }

    public function __clone()
    {
        self::$info++;
    }
}

$hyper= new studnt(omer:"vaw", dhaka: "donia");
$newstu= clone $hyper;
$new2=unserialize(serialize($hyper));

var_dump($hyper,$newstu,$new2);
echo studnt::$info;

//----------------------------clone method used---------------------------//

?>