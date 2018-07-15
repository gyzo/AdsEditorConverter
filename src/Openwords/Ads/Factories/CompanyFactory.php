<?php

namespace Openwords\Ads\Factories;

use Openwords\Ads\CompanyAds;

class CompanyFactory {

    public static function createCompanyAds(string $campaignName, array $requiredValues, array $optionalValues = []): CompanyAds
    {
        $c = new CompanyAds($campaignName, $requiredValues);
        $c->setBudget($requiredValues['budget']);
        return $c;
    }
}