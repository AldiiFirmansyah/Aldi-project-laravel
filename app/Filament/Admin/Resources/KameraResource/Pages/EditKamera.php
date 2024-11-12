<?php

namespace App\Filament\Admin\Resources\KameraResource\Pages;

use App\Filament\Admin\Resources\KameraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKamera extends EditRecord
{
    protected static string $resource = KameraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
