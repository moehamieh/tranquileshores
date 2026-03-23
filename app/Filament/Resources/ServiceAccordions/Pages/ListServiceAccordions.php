<?php

namespace App\Filament\Resources\ServiceAccordions\Pages;

use App\Filament\Resources\ServiceAccordions\ServiceAccordionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceAccordions extends ListRecords
{
    protected static string $resource = ServiceAccordionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
