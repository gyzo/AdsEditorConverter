<?php

namespace Openwords\Tests\Ads\File;

use Openwords\Ads\CompanyAds;
use Openwords\Ads\FileAdManager;
use Openwords\Ads\GroupAds;
use Openwords\Ads\TextAd;
use PHPUnit\Framework\TestCase;

class FileAdManagerTest extends TestCase
{

    protected function setUp()
    {
        unlink(__DIR__.'/../Fixtures/');
    }

    public function testAddingNewCampaignWithGroupAndAds()
    {
        $converter = new \DateTime();
        $manager = new FileAdManager($converter);
        $manager->setCsvFIle(__DIR__.'/../Fixtures/file.csv');
        $manager->setOutFile(__DIR__.'/../Fixtures/output.csv');
        $manager->print();
        $manager->save();

        $this->assertFileExists(__DIR__.'/../Fixtures/output.csv');
    }
}