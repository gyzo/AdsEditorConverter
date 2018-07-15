<?php

namespace Openwords\Ads\File;

use League\Csv\Reader;
use League\Csv\Writer;

class Converter {

    private $_rows;

    private $_convertedRows;

    private $_reader;

    private $_writer;

    public function __construct(string $from, string $output)
    {
        $this->_rows = [];
        $this->_reader = Reader::createFromPath($from, 'r');
        $this->_writer = Writer::createFromPath($output, 'w+');
    }

    public function readRows()
    {
        $this->_reader->setHeaderOffset(0);
        $this->_rows = $this->_reader->getRecords();

        return $this->_rows;
    }

    private function _convertRow($row) {

    }

    public function save()
    {
        $this->_convertedRows = [];
        foreach($this->_rows as $_r) {
            $this->_convertedRows[] = $this->_convertRow($_r);
        }


        $this->_writer->insertAll($this->_convertedRows);
    }
}