<?php

class OrderController
{
    public function export() {

        $orderExport = new OrderExport();

        return $orderExport->getOrders('1970-01-01', '2023-12-31')->export(
            new PdfExport() //qua sta la soluzione: quella che si passa è una classe che implementa un interfaccia
        );

    }
}