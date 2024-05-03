<?php

Interface Person{
 public function greet();


}

class English implements Person{
    public function greet(){
        return 'Hello';
    }

    class Tagalog implements Person{
        public function greet(){
            return 'kamusta';
        }
    }

    class Korean implements Person{
        public function greet(){
            return 'anyeong':

        }
    }

    class PersonGreet{
        public function greetings(){
            foreach ($people as $person){
                echo $person->greet(). PHP_EOL;
            }
        }
    }

    $greet = new PresonGreet();
    $people = [
        new Korean(),
        new English(),
        new Tagalog()
    ];
    $greet->greetings($people);