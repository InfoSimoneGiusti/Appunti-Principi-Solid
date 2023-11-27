<?php

// una metodo della classe figlia deve accettare gli stessi parametri della classe padre

class Parent {
    public function example(int $a, int $b) {
        return $a+$b;
    }
}

class Child extends Parent {

    //OK, do!
    public function example(int $a, int $b) {
        return $a + $b + 5;
    }


    //KO, dont!
    public function example(int $a, float $b) {
        return $a + $b;
    }

}