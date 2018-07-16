<?php

namespace Openwords\Tests\Ads\File;

use Openwords\Ads\CompanyAds;
use Openwords\Ads\FileAdManager;
use Openwords\Ads\GroupAds;
use Openwords\Ads\TextAd;
use PHPUnit\Framework\TestCase;

class FileAdManagerTest extends TestCase
{

    /** @var FileAdManager */
    private $_manager;

    const FILE_INPUT = __DIR__.'/../Fixtures/file.csv';

    const FILE_OUTPUT = __DIR__.'/../Fixtures/output.csv';

    protected function setUp(): void
    {
        $prototypeMock = $this->getMockBuilder('Openwords\Ads\IFilePrototype')
            ->disableOriginalConstructor()
            ->getMock();

        $prototypeMock->method('getHeadline')
            ->willReturn(array_merge(['Headline'], FileAdManager::HEADLINE));
        $prototypeMock->method('getCampaign')
            ->willReturn(array_merge(['Campaign'], FileAdManager::HEADLINE));
        $prototypeMock->method('getGroup')
            ->willReturn(array_merge(['Group'], FileAdManager::HEADLINE));
        $prototypeMock->method('getAd')
            ->willReturn(array_merge(['Ad'], FileAdManager::HEADLINE));

        $this->_manager = new FileAdManager(self::FILE_INPUT, self::FILE_OUTPUT);
        $this->_manager->setCampaign('Textile');
        $this->_manager->setPrototype($prototypeMock);
    }

    public function testSave(): void
    {
        $this->_manager->save();
        $this->assertFileExists(self::FILE_OUTPUT);
    }

    public function testConvert(): void
    {
        $this->_manager->convert();
        $rows = $this->_manager->getConvertedRows();
        $this->assertEquals(9, count($rows));

        $this->_manager->save();
    }


}