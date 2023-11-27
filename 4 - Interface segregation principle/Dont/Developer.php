<?php


class Developer implements WorkerInterface {

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