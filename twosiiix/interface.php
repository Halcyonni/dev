<?php

interface Logger{
    public function log($message);

}

class FileLogger implements Logger {

    private $handle;
    private $LogFile:


    public funtion__construct($filename){
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode) or die('could not open file');
    }

    public function log ($message){
        $message = date("D M j G:i:s T Y") . "-" . $message;
        fwrite($this->handle, $message);
    }

class DatabaseLogger implements Logger{
    public function log ($message){
        echo sprintf("Log %s to the Database");
    }
}
    
$logger = new FileLogger('./log.txt','r+' );
$logger->log("HELLO JOHN". PHP_EOL);
$logger->log("HELLO WORLD". PHP_EOL);

$logger = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
    
]
