<?php

// una metodo della classe figlia deve ritornare lo stesso tipo della classe padre


interface someInterface {
    public function example(int $a, int $b) : int;

}

class Parent extends someInterface {
    public function example(int $a, int $b) : int { //usando una interfaccia sono obbligato a rispettare la firma del metodo!
        return $a+$b;
    }
}
