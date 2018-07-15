<?php

namespace Openwords\Ads\Factories;

use Openwords\Ads\TextAd;

/**
 * Class AdFactory
 * @package Openwords\Ads
 */
class AdFactory
{
    /**
     * @param string $name
     * @param array $requiredValues
     * @param array $optionalValues
     * @return TextAd
     */
    public function createTextAd(string $name, array $requiredValues, array $optionalValues = []): TextAd
    {
        $textAd = new TextAd($name);

        $textAd->setFinalUrl($requiredValues['final_url']);
        $textAd->setHeadline1($requiredValues['headline_1']);
        $textAd->setHeadline2($requiredValues['headline_2']);
        $textAd->setDescription($requiredValues['description']);
        $this->_setOptionalValues($optionalValues, $textAd);

        return $textAd;
    }

    /**
     * @param array $optionalValues
     * @param $ad
     */
    private function _setOptionalValues(array $optionalValues = [], $ad): void
    {
        foreach ($optionalValues as $_k => $_v) {
            try {
                $arrayWords = explode('_', $_k);
                $arrayWords = array_map(function($i) {
                    return ucfirst($i);
                }, $arrayWords);
                $methodName = 'set' . join(''. $arrayWords);
                $ad->{$methodName}($_v);
            } catch (\Exception $exception) {
                //log error
            }
        }
    }

}