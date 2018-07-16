<?php

namespace Openwords\Ads;

interface IFilePrototype {

    public function getHeadline(): array;
    public function getCampaign(int $nrRow): array;
    public function getGroup(array $row): array;
    public function getAd(int $nrRow, array $row): array;
}