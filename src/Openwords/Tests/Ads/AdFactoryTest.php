<?php

namespace Openwords\Tests\Ads;

use Openwords\Ads\Factories\AdFactory;
use PHPUnit\Framework\TestCase;

class AdFactoryTest extends TestCase
{

    /** @var AdFactory */
    private $_factory;

    const REQUIRED_VALUES_TEXT_AD = [
        'headline_1' => 'nagłowek 1',
        'headline_2' => 'nagłowek 2',
        'final_url' => 'http://final.url',
        'description' => 'nagłowek 1',
    ];

    protected function setUp()
    {
        $this->_factory = new AdFactory();
    }

    public function testCreateTextAd()
    {
        $ad = $this->_factory->createTextAd('Kampania', self::REQUIRED_VALUES_TEXT_AD);
        $this->assertNotEmpty($ad);
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['headline_1'], $ad->getHeadline1());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['headline_2'], $ad->getHeadline2());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['description'], $ad->getDescription());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['final_url'], $ad->getFinalUrl());
    }

    public function testCreateTextAdWithOptionalValues()
    {
        $ad = $this->_factory->createTextAd("Kampania", self::REQUIRED_VALUES_TEXT_AD);
        $this->assertNotEmpty($ad);
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['headline_1'], $ad->getHeadline1());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['headline_2'], $ad->getHeadline2());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['description'], $ad->getDescription());
        $this->assertNotEmpty(self::REQUIRED_VALUES_TEXT_AD['final_url'], $ad->getFinalUrl());

    }

}