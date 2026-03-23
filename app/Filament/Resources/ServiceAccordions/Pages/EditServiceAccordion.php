<?php

namespace App\Filament\Resources\ServiceAccordions\Pages;

use App\Filament\Resources\ServiceAccordions\ServiceAccordionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceAccordion extends EditRecord
{
    protected static string $resource = ServiceAccordionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
