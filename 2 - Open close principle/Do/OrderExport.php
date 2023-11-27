<?php

class OrderExport
{

    private $orders;
    public function getOrders($from, $to) {

        $this->orders = DB::table('orders')
            ->whereBetween('created_at', [$from, $to])
            ->latest()
            ->get();

        return $this;

    }

    public function export(OrderExportFormatInterface $format) {
        $format->export($this->orders);
    }


}