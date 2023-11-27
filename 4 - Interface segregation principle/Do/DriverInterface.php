<?php

// una classe non dovrebbe essere costretta a implementare interfacce che non utilizza
interface DriverInterface
{
    public function drive() : string;
}