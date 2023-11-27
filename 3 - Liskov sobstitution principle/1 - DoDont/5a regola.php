<?php

// le eccezioni sollevate da classe padre e figlia devono essere le stesse

class Parent {
    public function example(int $a, int $b) : int {

        //logica di business del metodo
        if ($a == 0) {
            throw new Exception('Some exception');
        }

        if ($b == 'hello') {
            throw new CustomException('Some exception');
        }

    }

}

class Child extends Parent {

    //OK, do!
    public function example(int $a, int $b) : int {

        if ($a == 0) {
            throw new Exception('Some exception');
        }

        if ($b == 'hello') {
            throw new CustomException('Some exception');
        }

    }

    
    //KO, dont!
    public function example(int $a, int $b) : string {

        if ($a == 0) {
            throw new Exception('Some exception');
        }

        if ($b == 'hello') {
            throw new AnotherCustomException('Some exception');
        }

    }

}