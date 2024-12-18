<?php

namespace App\Filament\Resources\Case1Resource\Pages;

use App\Filament\Resources\Case1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCase1 extends EditRecord
{
    protected static string $resource = Case1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
