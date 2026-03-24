<?php

namespace App\Filament\Resources\HowItWorks\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HowItWorksForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('step_number')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
