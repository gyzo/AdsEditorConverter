<?php

namespace Openwords\Ads;

class CompanyAds extends AbstractAd {
    /**
     * CompanyAds constructor.
     * @param string $campaignName
     */
    public function __construct(string $campaignName)
    {
        parent::__construct($campaignName);
        $this->_DSATargetingSource = 'Google';
        $this->_exclusionMethod = 'Location of presence or Area of interest';
        $this->_targetingMethod = 'Location of presence or Area of interest';
        $this->_deliveryMethod = 'Standard';
        $this->_adRotation = 'Optimize';
        $this->_adSchedule = [];
        $this->_endDate = [];
        $this->_startDate = (new \DateTime());
        $this->_enhancedCPC = 'Disabled';
        $this->_bidStrategyType = 'Manual CPC';
        $this->_languages = 'pl';
        $this->_networks = 'Google search';
        $this->_campaignType = 'Search';
        $this->_budgetPeriod = 'Daily';
        $this->_campaignStatus = true;
    }


    public function setBudget(float $budget): CompanyAds
    {
        $this->_budget = $budget;

        return $this;
    }


}