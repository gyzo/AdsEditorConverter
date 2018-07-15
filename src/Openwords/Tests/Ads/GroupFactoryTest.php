<?php

namespace Openwords\Tests\Ads;

use Openwords\Ads\Factories\GroupFactory;
use PHPUnit\Framework\TestCase;

class GroupFactoryTest extends TestCase
{
    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
    }

    public function testCreateAdsGroup()
    {
        $group = GroupFactory::createAdsGroup(
            'Kampania 1',
            [
                'ad_group' => 'Grupa 1',
                'max_cpc' => 2
            ]
        );
        $this->assertNotEmpty($group);
        $this->assertEquals(2, $group->getMaxCPC());
        $this->assertEquals('Kampania 1', $group->getCampaign());
        $this->assertEquals("Grupa 1", $group->getAdGroup());
    }
}