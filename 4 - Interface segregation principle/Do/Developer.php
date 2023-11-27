<?php


class Developer implements DeveloperInterface, HumanInterface {

    public function eat()
    {
        return 'mangio';
    }

    public function sleep()
    {
        return 'dormo';
    }

    public function code()
    {
        return 'programmo';
    }
}