<?php

// una metodo della classe figlia deve ritornare lo stesso tipo della classe padre

class Parent {
    public function example(int $a, int $b) : int {
        return $a+$b;
    }
}

class Child extends Parent {

    //OK, do!
    public function example(int $a, int $b) : int {
        return $a + $b + 5;
    }

    
    //KO, dont!
    public function example(int $a, int $b) : string {
        return "La somma è : " . ($a + $b);
    }

}