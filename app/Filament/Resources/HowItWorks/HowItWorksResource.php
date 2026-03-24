<?php

namespace App\Filament\Resources\HowItWorks;

use App\Filament\Resources\HowItWorks\Pages\CreateHowItWorks;
use App\Filament\Resources\HowItWorks\Pages\EditHowItWorks;
use App\Filament\Resources\HowItWorks\Pages\ListHowItWorks;
use App\Filament\Resources\HowItWorks\Schemas\HowItWorksForm;
use App\Filament\Resources\HowItWorks\Tables\HowItWorksTable;
use App\Models\HowItWorks;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HowItWorksResource extends Resource
{
    protected static ?string $model = HowItWorks::class;

    protected static ?string $navigationLabel = 'How it work';

    protected static ?int $navigationSort = 7;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLightBulb;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HowItWorksForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HowItWorksTable::configure($table);
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
            'index' => ListHowItWorks::route('/'),
            'create' => CreateHowItWorks::route('/create'),
            'edit' => EditHowItWorks::route('/{record}/edit'),
        ];
    }
}
