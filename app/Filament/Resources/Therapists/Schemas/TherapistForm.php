<?php

namespace App\Filament\Resources\Therapists\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TherapistForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->label('Image 1024 * 710')
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
                RichEditor::make('bio')
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
