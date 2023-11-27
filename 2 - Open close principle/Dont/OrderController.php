<?php

class OrderController
{
    public function export($format) {

        /* Ammettiamo di consentire l'export in vari modi... */

        $orderExport = new OrderQuery();

        //questo codice richiederebbe modifiche, se in futuro volessi consentire l'export in CSV...
        //finendo per non rispettare il principio Open Close

        if ($format == 'PDF') {
            $pdfExport = new PdfExport();
            return $pdfExport->export($orderExport->getOrders('1970-01-01', '2023-12-31'));
        } else {
            $pdfExport = new XlsExport();
            return $pdfExport->export($orderExport->getOrders('1970-01-01', '2023-12-31'));
        }


    }
}