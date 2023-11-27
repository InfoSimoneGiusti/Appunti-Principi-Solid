<?php

class PdfExport implements OrderExportFormatInterface
{
    public function export($data) {
        return 'pdf format';
    }
}