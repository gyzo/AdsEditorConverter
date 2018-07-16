<?php

namespace Openwords\Ads;


use League\Csv\Reader;
use League\Csv\Writer;

class FileAdManager {

    private $_rows;

    private $_convertedRows;

    private $_reader;

    private $_writer;

    /** @var string */
    private $_campaign;

    /** @var IFilePrototype */
    private $_prototype;

    const HEADLINE = [
        'Campaign', 'Max CPC', 'Ad Group', 'Keyword'
    ];

    /**
     * FileAdManager constructor.
     * @param string $from
     * @param string $output
     */
    public function __construct(string $from, string $output)
    {
        $this->_rows = [];
        $this->_convertedRows = [];
        $this->_reader = Reader::createFromPath($from, 'r');
        $this->_writer = Writer::createFromPath($output, 'w+');
    }

    /**
     * @param IFilePrototype $_prototype
     */
    public function setPrototype(IFilePrototype $_prototype)
    {
        $this->_prototype = $_prototype;
    }

    /**
     * @param string $campaign
     * @return $this
     */
    public function setCampaign(string $campaign)
    {
        $this->_campaign = $campaign;
        return $this;
    }

    private function _readRows()
    {
        $this->_rows = $this->_reader->getRecords();
        return $this->_rows;
    }

    private function _convertRow(array $_r) {
        $this->_convertedRows[] = $this->_getGroupRow($_r);
        $this->_convertedRows[] = $this->_getAdRow(1, $_r);
        $this->_convertedRows[] = $this->_getAdRow(2, $_r);
    }

    private function _getHeaderRow()
    {
        return $this->_prototype->getHeadline();
    }

    private function _getCampaignRow($nrRow)
    {
        return $this->_prototype->getCampaign($nrRow);
    }

    private function _getGroupRow(array $row)
    {
        return $this->_prototype->getGroup($row);
    }

    private function _getAdRow($nrRow,array $row)
    {
        return $this->_prototype->getAd($nrRow, $row);
    }

    public function convert()
    {
        $this->_convertedRows = [];
        //insert header
        $this->_convertedRows[] = $this->_getHeaderRow();
        //insert campaign
        $this->_convertedRows[] = $this->_getCampaignRow(1);
        //insert group + two row per ad
        foreach($this->_readRows() as $_r) {
            $this->_convertRow($_r);
        }
        //insert cmapign
        $this->_convertedRows[] = $this->_getCampaignRow(2);
    }

    /**
     * @return array
     */
    public function getConvertedRows()
    {
        return $this->_convertedRows;
    }

    public function save()
    {
        $this->_writer->insertAll($this->_convertedRows);
    }
}