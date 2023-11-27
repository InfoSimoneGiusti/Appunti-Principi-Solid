<?php

class OrderExport
{
    public function getOrders($from, $to) {

        return DB::table('orders')
            ->whereBetween('created_at', [$from, $to])
            ->latest()
            ->get();

    }
}