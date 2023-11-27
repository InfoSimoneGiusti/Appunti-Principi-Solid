<?php

// una classe non dovrebbe essere costretta a implementare interfacce che non utilizza
interface DeveloperInterface
{
    public function code() : string;
}