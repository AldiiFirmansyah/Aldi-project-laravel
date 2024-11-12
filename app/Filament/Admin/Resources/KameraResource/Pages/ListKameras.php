<?php

namespace App\Filament\Admin\Resources\KameraResource\Pages;

use App\Filament\Admin\Resources\KameraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKameras extends ListRecords
{
    protected static string $resource = KameraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
