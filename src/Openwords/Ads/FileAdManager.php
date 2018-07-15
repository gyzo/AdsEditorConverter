<?php

namespace Openwords\Ads;

use Openwords\Ads\File\Converter;

class FileAdManager {

    private $_converter;

    private $_csvFile;

    private $_outFile;


    public function __construct(string $from, string $to)
    {
        $this->_csvFile = $from;
        $this->_outFile = $to;
        $this->_converter = new Converter($from, $to);
    }

    public function setCsvFile($path)
    {
        $this->_csvFile = $path;

        return $this;
    }

    public function setOutFile($file)
    {
        $this->_outFile = $file;

        return $this;
    }

    public function print()
    {
        $cmp = new CompanyAds('Textile.com', []);

        foreach($this->_readRows() as $_r) {
            $gr = new GroupAds($cmp->getCampaign(), []);
            $ad = new TextAd($cmp->getCampaign(), []);
            $gr->pushAd($ad);
            $cmp->pushGroup($gr);
        }

    }

    public function _readRows()
    {
        return [];
    }

    public function save()
    {
        $this->_converter->save($this->_outFile);
    }
}