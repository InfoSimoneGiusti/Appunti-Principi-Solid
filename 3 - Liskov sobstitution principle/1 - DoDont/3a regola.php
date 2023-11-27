<?php

// le precondizioni non possono essere più stringenti nella classe figlia

class Parent {
    public function example(int $a, int $b) : int {

        if ($a == 0) {
            //do something
        }

        //logica di business del metodo

    }
}

class Child extends Parent {

    //OK, do!
    public function example(int $a, int $b) : int {

        //Una precondizione puo non essere presente (come in questo caso) o meno stringente

        //logica di business del metodo

    }

    
    //KO, dont!
    public function example(int $a, int $b) : string {

        //Una precondizione non deve essere più stringente
        if ($a == 0 && $b == 5) {
            //do something
        }

        //logica di business del metodo

    }

}