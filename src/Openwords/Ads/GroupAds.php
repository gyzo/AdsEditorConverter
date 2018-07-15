<?php

namespace Openwords\Ads;

class GroupAds extends AbstractAd {

    /** @var array  */
    private $_extendedTextAds;

    /**
     * GroupAds constructor.
     * @param string $campaignName
     */
    public function __construct(string $campaignName)
    {
        parent::__construct($campaignName);
        $this->_extendedTextAds = [];
        $this->_flexibleReach = [];
        $this->_adGroupStatus = true;
        $this->_displayNetworkCustomBidType = 'None';
        $this->_targetingOptimization = false;
        $this->_contentKeywords = false;
        $this->_adGroupType = 'Default';
        $this->_campaignStatus = true;
        $this->_adGroupStatus = true;
    }

    /**
     * @param string $adGroup
     * @return GroupAds
     */
    public function setAdGroup(string $adGroup): GroupAds
    {
        $this->_adGroup = $adGroup;

        return $this;
    }

    /**
     * @param float $maxCPC
     * @return GroupAds
     */
    public function setMaxCPC(float $maxCPC): GroupAds
    {
        $this->_maxCPC = $maxCPC;

        return $this;
    }

    /**
     * @param array $flexibleReach
     * @return GroupAds
     */
    public function setFlexibleReach(array $flexibleReach): GroupAds
    {
        $this->_flexibleReach = $flexibleReach;

        return $this;
    }

    /**
     * @param string $displayNetworkCustomBidType
     * @return GroupAds
     */
    public function setDisplayNetworkCustomBidType(string $displayNetworkCustomBidType): GroupAds
    {
        $this->_displayNetworkCustomBidType = $displayNetworkCustomBidType;
    }

    /**
     * @param bool $targetingOptimization
     * @return GroupAds
     */
    public function setIsTargetingOptimization(boolean $targetingOptimization): GroupAds
    {
        $this->_targetingOptimization = $targetingOptimization;

        return $this;
    }

    /**
     * @param bool $contentKeywords
     * @return GroupAds
     */
    public function setIsContentKeywords(boolean $contentKeywords): GroupAds
    {
        $this->_contentKeywords = $contentKeywords;

        return $this;
    }

    /**
     * @param bool $campaignStatus
     * @return GroupAds
     */
    public function setIsCampaignStatus(boolean $campaignStatus): GroupAds
    {
        $this->_campaignStatus = $campaignStatus;

        return $this;
    }

    /**
     * @param bool $adGroupStatus
     * @return GroupAds
     */
    public function setAdGroupStatus(boolean $adGroupStatus): GroupAds
    {
        $this->_adGroupStatus = $adGroupStatus;

        return $this;
    }

}