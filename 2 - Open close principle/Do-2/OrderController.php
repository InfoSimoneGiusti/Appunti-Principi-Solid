<?php

class OrderController
{
    public function export() {

        $orderQuery = new OrderQuery();
        $orders = $orderQuery->getOrders('1970-01-01', '2023-12-31');
        $orderExport = new OrderExport($orders);

        return $orderExport->export(
            new PdfExport() //qua sta la soluzione: quella che si passa è una classe che implementa un interfaccia
        );

    }
}