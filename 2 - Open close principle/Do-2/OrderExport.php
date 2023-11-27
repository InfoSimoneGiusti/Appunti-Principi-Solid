<?php

class OrderExport
{

    private $orders;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function export(OrderExportFormatInterface $format) {
        $format->export($this->orders);
    }

}