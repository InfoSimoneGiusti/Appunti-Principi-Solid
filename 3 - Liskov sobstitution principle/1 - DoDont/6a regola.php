<?php

// Quando si estende una classe (superclasse) per crearne un'altra (sottoclasse), la sottoclasse deve rispettare gli invarianti della superclasse.
// Gli invarianti sono le proprietà che devono essere sempre vere durante il ciclo di vita di un oggetto.


class Shape {

    protected $area = 0; //supponiamo che questo valore DEBBA essere sempre maggiore di zero

    public function getArea() {
        return $this->area;
    }

}

//OK, do! -- l'area sarà sempre positiva (sia che passo un valore positivo che negativo, ottengo un risultato positivo)
class Square extends Shape {
    public function setSide($side) {
        $this->area = $side * $side;
    }
}

//KO, dont! -- potrei settare l'area con un valore negativo
class InvalidSquare extends Shape {
    public function setArea($area) {
        $this->area = $area;
    }
}