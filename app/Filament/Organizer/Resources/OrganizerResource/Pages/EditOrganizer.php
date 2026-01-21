<?php

namespace App\Filament\Organizer\Resources\OrganizerResource\Pages;

use App\Filament\Organizer\Resources\OrganizerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizer extends EditRecord
{
    protected static string $resource = OrganizerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
