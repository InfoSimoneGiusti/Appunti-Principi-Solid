<?php


class Driver implements WorkerInterface {

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
        // non ha senso per un autista programmare. Questo metodo è inutile per questa classe!
        // se ritorno qualcosa di diverso da quanto previsto nella interfaccia inoltre violo il principio di Liskov

        return null;

    }

}