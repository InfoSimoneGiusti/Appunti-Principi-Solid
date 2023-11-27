<?php

// una classe non dovrebbe essere costretta a implementare interfacce che non utilizza
interface WorkerInterface
{
    public function eat() : string;

    public function sleep() : string;

    public function code() : string;
}