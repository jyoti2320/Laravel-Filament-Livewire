<?php

namespace App\Filament\Resources\Case1Resource\Pages;

use App\Filament\Resources\Case1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCase1s extends ListRecords
{
    protected static string $resource = Case1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
