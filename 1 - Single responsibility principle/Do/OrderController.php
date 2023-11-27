<?php

class OrderController
{
    public function export() {

        /*
            Rispettato il principio di Single Responsability Principle
            La classe OrderExport è responsabile di esportate gli ordini
            La classe PdfExport di creare l'export in PDF
        */

        $orderExport = new OrderQuery();

        //se, ipotesi, volessi esportare in PDF
        $pdfExport = new PdfExport();
        return $pdfExport->export($orderExport->getOrders('1970-01-01', '2023-12-31'));

    }
}