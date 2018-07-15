<?php

namespace Openwords\Tests\Ads;

use Openwords\Ads\Factories\CompanyFactory;
use PHPUnit\Framework\TestCase;

class CompanyFactoryTest extends TestCase
{
    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
    }


    public function testCreateCompanyAds()
    {
       $company = CompanyFactory::createCompanyAds("Kampania 1", [
           'budget' => 20
       ]);
       $this->assertNotEmpty($company);
    }

}