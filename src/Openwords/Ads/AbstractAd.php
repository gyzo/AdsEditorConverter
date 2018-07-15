<?php

namespace Openwords\Ads;

abstract class AbstractAd {

    /** @var string */
    protected $_campaign;

    protected $_labels;

    /** @var float */
    protected $_budget;

    /** @var string */
    protected $_budgetPeriod;

    /** @var string */
    protected $_campaignType;

    /** @var string */
    protected $_networks;

    /** @var string */
    protected $_languages;

    /** @var string */
    protected $_bidStrategyType;

    /** @var boolean */
    protected $_enhancedCPC;

    /** @var \DateTime */
    protected $_startDate;

    /** @var array */
    protected $_endDate;

    /** @var array */
    protected $_adSchedule;

    /** @var string */
    protected $_adRotation;

    /** @var string */
    protected $_deliveryMethod;

    /** @var string */
    protected $_targetingMethod;

    /** @var string */
    protected $_exclusionMethod;

    protected $_DSAWebsite;

    protected $_DSALanguage;

    /** @var string */
    protected $_DSATargetingSource;

    protected $_DSAPage;

    /** @var array */
    protected $_flexibleReach;

    /** @var string */
    protected $_adGroup;

    /** @var float */
    protected $_maxCPC;

    /** @var float */
    protected $_maxCPM;

    /** @var float */
    protected $_targetCPA;

    protected $_maxCPV;

    protected $_desktopBidModifier;

    protected $_mobileBidModifier;

    protected $_tableBidModifier;

    protected $_topContentBidModifier;

    /** @var none */
    protected $_displayNetworkCustomBidType;

    /** @var boolean */
    protected $_targetingOptimization;

    /** @var boolean */
    protected $_contentKeywords;

    /** @var string */
    protected $_adGroupType;

    protected $_trackingTemplate;

    protected $_finalURLSuffix;

    protected $_customParameters;

    /** @var integer */
    protected $_ID;

    /** @var string */
    protected $_location;

    /** @var float */
    protected $_reach;

    protected $_feed;

    protected $_radius;

    protected $_unit;

    protected $_bidModifier;

    /** @var string */
    protected $_keyword;

    /** @var string */
    protected $_criterionType;

    /** @var float */
    protected $_firstPage;

    /** @var float */
    protected $_topOfPageBid;

    /** @var float */
    protected $_firstPositionBid;

    protected $_qualityScore;

    /** @var string */
    protected $_landingPageExperience;

    /** @var string */
    protected $_expectedCTR;

    /** @var string */
    protected $_adRelevance;

    protected $_destinationUrl;

    /** @var string */
    protected $_finalUrl;

    protected $_finalMobileUrl;

    /** @var string */
    protected $_headline1;

    /** @var string */
    protected $_headline2;

    /** @var string */
    protected $_description;

    /** @var string */
    protected $_path1;

    /** @var string */
    protected $_path2;

    /** @var boolean */
    protected $_campaignStatus;

    /** @var boolean */
    protected $_adGroupStatus;

    /** @var boolean */
    protected $_status;

    /** @var string */
    protected $_approvalStatus;

    protected $_comment;

    public function __construct(string $campaignName)
    {
        $this->_campaign = $campaignName;
    }

    /**
     * @return string
     */
    public function getCampaign(): string
    {
        return $this->_campaign;
    }

    /**
     * @return mixed
     */
    public function getLabels()
    {
        return $this->_labels;
    }

    /**
     * @return float
     */
    public function getBudget(): float
    {
        return $this->_budget;
    }

    /**
     * @return string
     */
    public function getBudgetPeriod(): string
    {
        return $this->_budgetPeriod;
    }

    /**
     * @return string
     */
    public function getCampaignType(): string
    {
        return $this->_campaignType;
    }

    /**
     * @return string
     */
    public function getNetworks(): string
    {
        return $this->_networks;
    }

    /**
     * @return string
     */
    public function getLanguages(): string
    {
        return $this->_languages;
    }

    /**
     * @return string
     */
    public function getBidStrategyType(): string
    {
        return $this->_bidStrategyType;
    }

    /**
     * @return bool
     */
    public function isEnhancedCPC(): bool
    {
        return $this->_enhancedCPC;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->_startDate;
    }

    /**
     * @return array
     */
    public function getEndDate(): array
    {
        return $this->_endDate;
    }

    /**
     * @return array
     */
    public function getAdSchedule(): array
    {
        return $this->_adSchedule;
    }

    /**
     * @return string
     */
    public function getAdRotation(): string
    {
        return $this->_adRotation;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod(): string
    {
        return $this->_deliveryMethod;
    }

    /**
     * @return string
     */
    public function getTargetingMethod(): string
    {
        return $this->_targetingMethod;
    }

    /**
     * @return string
     */
    public function getExclusionMethod(): string
    {
        return $this->_exclusionMethod;
    }

    /**
     * @return mixed
     */
    public function getDSAWebsite()
    {
        return $this->_DSAWebsite;
    }

    /**
     * @return mixed
     */
    public function getDSALanguage()
    {
        return $this->_DSALanguage;
    }

    /**
     * @return string
     */
    public function getDSATargetingSource(): string
    {
        return $this->_DSATargetingSource;
    }

    /**
     * @return mixed
     */
    public function getDSAPage()
    {
        return $this->_DSAPage;
    }

    /**
     * @return array
     */
    public function getFlexibleReach(): array
    {
        return $this->_flexibleReach;
    }

    /**
     * @return string
     */
    public function getAdGroup(): string
    {
        return $this->_adGroup;
    }

    /**
     * @return float
     */
    public function getMaxCPC(): float
    {
        return $this->_maxCPC;
    }

    /**
     * @return float
     */
    public function getMaxCPM(): float
    {
        return $this->_maxCPM;
    }

    /**
     * @return float
     */
    public function getTargetCPA(): float
    {
        return $this->_targetCPA;
    }

    /**
     * @return mixed
     */
    public function getMaxCPV()
    {
        return $this->_maxCPV;
    }

    /**
     * @return mixed
     */
    public function getDesktopBidModifier()
    {
        return $this->_desktopBidModifier;
    }

    /**
     * @return mixed
     */
    public function getMobileBidModifier()
    {
        return $this->_mobileBidModifier;
    }

    /**
     * @return mixed
     */
    public function getTableBidModifier()
    {
        return $this->_tableBidModifier;
    }

    /**
     * @return mixed
     */
    public function getTopContentBidModifier()
    {
        return $this->_topContentBidModifier;
    }

    /**
     * @return none
     */
    public function getDisplayNetworkCustomBidType(): none
    {
        return $this->_displayNetworkCustomBidType;
    }

    /**
     * @return bool
     */
    public function isTargetingOptimization(): bool
    {
        return $this->_targetingOptimization;
    }

    /**
     * @return bool
     */
    public function isContentKeywords(): bool
    {
        return $this->_contentKeywords;
    }

    /**
     * @return string
     */
    public function getAdGroupType(): string
    {
        return $this->_adGroupType;
    }

    /**
     * @return mixed
     */
    public function getTrackingTemplate()
    {
        return $this->_trackingTemplate;
    }

    /**
     * @return mixed
     */
    public function getFinalURLSuffix()
    {
        return $this->_finalURLSuffix;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->_customParameters;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->_ID;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->_location;
    }

    /**
     * @return float
     */
    public function getReach(): float
    {
        return $this->_reach;
    }

    /**
     * @return mixed
     */
    public function getFeed()
    {
        return $this->_feed;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->_radius;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->_unit;
    }

    /**
     * @return mixed
     */
    public function getBidModifier()
    {
        return $this->_bidModifier;
    }

    /**
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->_keyword;
    }

    /**
     * @return string
     */
    public function getCriterionType(): string
    {
        return $this->_criterionType;
    }

    /**
     * @return float
     */
    public function getFirstPage(): float
    {
        return $this->_firstPage;
    }

    /**
     * @return float
     */
    public function getTopOfPageBid(): float
    {
        return $this->_topOfPageBid;
    }

    /**
     * @return float
     */
    public function getFirstPositionBid(): float
    {
        return $this->_firstPositionBid;
    }

    /**
     * @return mixed
     */
    public function getQualityScore()
    {
        return $this->_qualityScore;
    }

    /**
     * @return string
     */
    public function getLandingPageExperience(): string
    {
        return $this->_landingPageExperience;
    }

    /**
     * @return string
     */
    public function getExpectedCTR(): string
    {
        return $this->_expectedCTR;
    }

    /**
     * @return string
     */
    public function getAdRelevance(): string
    {
        return $this->_adRelevance;
    }

    /**
     * @return mixed
     */
    public function getDestinationUrl()
    {
        return $this->_destinationUrl;
    }

    /**
     * @return string
     */
    public function getFinalUrl(): string
    {
        return $this->_finalUrl;
    }

    /**
     * @return mixed
     */
    public function getFinalMobileUrl()
    {
        return $this->_finalMobileUrl;
    }

    /**
     * @return string
     */
    public function getHeadline1(): string
    {
        return $this->_headline1;
    }

    /**
     * @return string
     */
    public function getHeadline2(): string
    {
        return $this->_headline2;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @return string
     */
    public function getPath1(): string
    {
        return $this->_path1;
    }

    /**
     * @return string
     */
    public function getPath2(): string
    {
        return $this->_path2;
    }

    /**
     * @return bool
     */
    public function isCampaignStatus(): bool
    {
        return $this->_campaignStatus;
    }

    /**
     * @return bool
     */
    public function isAdGroupStatus(): bool
    {
        return $this->_adGroupStatus;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->_status;
    }

    /**
     * @return string
     */
    public function getApprovalStatus(): string
    {
        return $this->_approvalStatus;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }
}
