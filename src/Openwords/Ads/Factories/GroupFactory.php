<?php

namespace Openwords\Ads\Factories;

use Openwords\Ads\GroupAds;

class GroupFactory {

    /**
     * @param string $name
     * @param array $requiredValues
     * @param array $optionalValues
     * @return GroupAds
     * @throws \Exception
     */
    public static function createAdsGroup(string $name, array $requiredValues, array $optionalValues = []): GroupAds
    {
        $group = new GroupAds($name);
        $group->setMaxCPC($requiredValues['max_cpc']);
        $group->setAdGroup($requiredValues['ad_group']);

        return $group;
    }
}