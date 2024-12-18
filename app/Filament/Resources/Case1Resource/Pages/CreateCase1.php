<?php

namespace App\Filament\Resources\Case1Resource\Pages;

use App\Filament\Resources\Case1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCase1 extends CreateRecord
{
    protected static string $resource = Case1Resource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
