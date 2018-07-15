<?php

namespace Openwords\Ads;

class TextAd extends AbstractAd {

    public function __construct(string $campaignName)
    {
        parent::__construct($campaignName);
        $this->_criterionType = 'Exact';
        $this->_topOfPageBid = 0;
        $this->_firstPositionBid = 0;
        $this->_landingPageExperience = ' -';
        $this->_expectedCTR = ' -';
        $this->_adRelevance = ' -';
        $this->_campaignStatus = true;
        $this->_adGroupStatus = true;
        $this->_status = true;
        $this->_approvalStatus = 'Approved';
    }

    public function setDescription(string $description): TextAd
    {
        $this->_description = $description;

        return $this;
    }


    public function setHeadline2(string $headline): TextAd
    {
        $this->_headline2 = $headline;

        return $this;
    }


    public function setHeadline1(string $headline): TextAd
    {
        $this->_headline1 = $headline;

        return $this;
    }

    /**
     * @param string $adGroup
     * @return TextAd
     */
    public function setAdGroup(string $adGroup): TextAd
    {
        $this->_adGroup = $adGroup;
        return $this;
    }

    /**
     * @param string $keyword
     * @return TextAd
     */
    public function setKeyword(string $keyword): TextAd
    {
        $this->_keyword = $keyword;
        return $this;
    }

    /**
     * @param string $finalUrl
     * @return TextAd
     */
    public function setFinalUrl(string $finalUrl): TextAd
    {
        $this->_finalUrl = $finalUrl;
        return $this;
    }

}