<?php

namespace App\Filament\Resources\ServiceAccordions;

use App\Filament\Resources\ServiceAccordions\Pages\CreateServiceAccordion;
use App\Filament\Resources\ServiceAccordions\Pages\EditServiceAccordion;
use App\Filament\Resources\ServiceAccordions\Pages\ListServiceAccordions;
use App\Filament\Resources\ServiceAccordions\Schemas\ServiceAccordionForm;
use App\Filament\Resources\ServiceAccordions\Tables\ServiceAccordionsTable;
use App\Models\ServiceAccordion;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceAccordionResource extends Resource
{
    protected static ?string $model = ServiceAccordion::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Services Managment';

    protected static ?int $navigationSort = 4;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ServiceAccordionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceAccordionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServiceAccordions::route('/'),
            'create' => CreateServiceAccordion::route('/create'),
            'edit' => EditServiceAccordion::route('/{record}/edit'),
        ];
    }
}
