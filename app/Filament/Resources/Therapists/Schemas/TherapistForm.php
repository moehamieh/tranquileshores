<?php

namespace App\Filament\Resources\Therapists\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TherapistForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('role')
                    ->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->image()
                    ->directory('therapists')
                    ->visibility('public'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('office_phone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Textarea::make('bio')
                    ->columnSpanFull(),
                Repeater::make('education')
                    ->schema([
                        TextInput::make('label')
                            ->required(),
                        TextInput::make('value')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
                TextInput::make('certification'),
                TextInput::make('expertise'),
                TextInput::make('practice_years')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('min_price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('$'),
                Repeater::make('social_links')
                    ->schema([
                        Select::make('platform')
                            ->options([
                                'facebook' => 'Facebook',
                                'twitter' => 'Twitter',
                                'linkedin' => 'LinkedIn',
                                'instagram' => 'Instagram',
                            ])
                            ->required(),
                        TextInput::make('url')
                            ->url()
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
                TagsInput::make('tags'),
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default(PublishStatus::Published->value)
                    ->required(),
            ]);
    }
}
