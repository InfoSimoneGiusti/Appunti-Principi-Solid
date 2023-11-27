<?php


class Driver implements DriverInterface, HumanInterface {

    public function eat()
    {
        return 'mangio';
    }

    public function sleep()
    {
        return 'dormo';
    }

    public function drive()
    {
        return 'guido';
    }

}