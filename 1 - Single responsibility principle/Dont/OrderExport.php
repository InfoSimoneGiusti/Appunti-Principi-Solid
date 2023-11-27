<?php

class OrderExport
{
    /*
        Questo metodo viola il principio di singola responsabilità
        in quanto si occupa di fare 2 cose: recuperare i dati dal DB
        e, in base al formato, ritornare un export in un formato specifico
    */
    public function export($from, $to, $format) {

        $orders = DB::table('orders')
        ->whereBetween('created_at', [$from, $to])
        ->latest()
        ->get();

        if ($format === 'pdf') {
            return 'pdf format';
        }

        if ($format === 'xls') {
            return 'xls format';
        }

        return 'Please select a valid format';


    }
}