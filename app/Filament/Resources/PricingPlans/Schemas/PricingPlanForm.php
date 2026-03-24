<?php

namespace App\Filament\Resources\PricingPlans\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PricingPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('unit')
                    ->required()
                    ->default('per 50 minute session'),
                RichEditor::make('description')
                    ->columnSpanFull(),
                Repeater::make('features')
                    ->simple(
                        TextInput::make('feature')
                            ->required(),
                    )
                    ->columnSpanFull(),
                TextInput::make('icon')
                    ->required()
                    ->default('bi-laptop'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default(PublishStatus::Published->value)
                    ->required(),
            ]);
    }
}
