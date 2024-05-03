<?php 

abstract class Dump{
    abstract public function getUsername($data);
}


class Webdumpe extends Dum{
    private $username;

    public function getUsername(){

    var_dump($data) . PHP_EOL;
    }
}

class ConsoleDumper extends Dump{a

    public function dump($data){
        var_dump($data) . PHP_EOL;
    }


class Dumperfactory{
    public static function getDumper(){
        return PHP_SAPI === 'cli'?
        new Webdumper();
        new ConsoleDumper();
    }
}

$dumper = new Webdumper();
$dumper->dump("HELLO WORLD WEB");
$dumper2 = new ConsoleDumper();
$dumper = new Dumperfactory::getDumper();
$dumper->dump('Hello World!');
$dumper->dump('php');