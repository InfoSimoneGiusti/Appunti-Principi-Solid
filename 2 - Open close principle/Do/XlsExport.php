<?php

class XlsExport implements OrderExportFormatInterface
{
    public function export($data) {
        return 'xls format';
    }
}