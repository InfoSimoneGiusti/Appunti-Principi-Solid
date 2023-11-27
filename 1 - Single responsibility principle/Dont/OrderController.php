<?php

class OrderController
{
    public function export() {

        $orderExport = new OrderQuery();
        return $orderExport->export('1970-01-01', '2023-12-31', 'pdf');

    }
}