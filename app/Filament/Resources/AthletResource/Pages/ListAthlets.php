<?php

namespace App\Filament\Resources\AthletResource\Pages;

use App\Filament\Resources\AthletResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAthlets extends ListRecords
{
    protected static string $resource = AthletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
