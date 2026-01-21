<?php

namespace App\Filament\Organizer\Resources\OrganizerResource\Pages;

use App\Filament\Organizer\Resources\OrganizerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizers extends ListRecords
{
    protected static string $resource = OrganizerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
