<?php 
/*
trait logger{
    public function log($msg){
        echo data ("D M j G:i:s T Y").':'.'('.__CLASS__.')'.$msg;

    }
}

class BankAccount{

    use loggers;

    private $accountNumber;

    public function __construct($accountNumber){
        $this->$accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");

    }
}

class User{
    use loggers;

    public function __construct(){
        $this->log('a new user created');
    }
}

class Savings{
    private $saving;

    public function __construct($savings){
        $this->savings = $savings;
        $this->log("your money : $savings ");
    }
}

$bank = new BankAccount("OC001");
echo PHP_EOL;
$user = new user();
echo PHP_EOL;
$savings=new savings('1000');

*/

trait Compile{
    public function preprocess(){
        echo "Preprocess.. done" . PHP_EOL;
    }
}

trait assembler{
    public function create(){
        echo "create tthe object code file... done".PHP_EOL;


    }
}

Class IDE{
    use compiler  process, assembler,linker;

    public function run(){
        $this->
    }
}