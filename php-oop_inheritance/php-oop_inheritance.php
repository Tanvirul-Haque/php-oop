<?php 

class employee{
    public $name;
    public $age;
    public $salery;

    function __construct($a,$b,$c){
       
    $this->name=$a;
    $this->age=$b;
    $this->salery=$c;
    }
    
    function info(){
        echo "<h3>Employee profile</h3>";
        echo "employee name : " . $this->name . "<br>";
        echo "employee age : " .$this->age . "<br>";
        echo "employee salery " .$this->salery . "<br>";

    }
}
$t1=new employee("tanvirul",21,5000);
$t1->info();



//used inheritance to used data easely....... 

class manager extends employee{  //------------used entends-----------------

}

$t2= new manager("shihab",20,2000);
$t2->info();

//------------------practice-2------------------//


class workers{
    public $name;
    public $age;
    public $salery;

    function __construct($a,$b,$c){
        $this->name=$a;
        $this->age=$b;
        $this->salery=$c;
    }

    function info(){
        echo "<h3>workers details</h3>" . "<br>";
        echo "workers name is :" .$this->name . "<br>";
        echo "workets age is "  .$this->age . "<br>";
        echo "workets salery is" . $this->salery . "<br>";

    }
}
$w1= new workers("Nishat",20,5000);
$w1->info();

//------------------------//

class chairman extends workers{    //------------used entends-----------------
    public $ta=1000;
    public $phone=5000;
    public $salary=2000;
    public $totalsalary;

    function info(){
        $this->totalsalary= $this->salary + $this->ta + $this->phone;

        echo "<h3>charmen details</h3>" . "<br>";
        echo "workers name is :" .$this->name . "<br>";
        echo "workets age is "  .$this->age . "<br>";
        echo "workets salery is" . $this->totalsalary . "<br>";

    }
}

$y1= new chairman("shanto",20,5000);
$y1->info();
?>