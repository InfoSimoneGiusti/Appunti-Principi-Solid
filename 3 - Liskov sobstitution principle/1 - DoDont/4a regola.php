<?php

// le postcondizioni non possono essere meno stringenti nella classe figlia

class Parent {
    public function example(int $a, int $b) : int {

        //logica di business del metodo

        if ($a == 0 && $b > 15) {
            //do something
        }

    }
}

class Child extends Parent {

    //OK, do!
    public function example(int $a, int $b) : int {

        //logica di business del metodo

        if ($a == 0 && $b > 15) {
            //do something
        }

        // oppure

        if ($a == 0 && $b > 15 && ($a+$b) == 50) {
            //do something
        }

    }

    
    //KO, dont!
    public function example(int $a, int $b) : string {

        //logica di business del metodo

        if ($a == 0) {
            //do something
        }

    }

}