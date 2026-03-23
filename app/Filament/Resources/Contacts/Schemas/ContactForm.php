<?php

namespace App\Filament\Resources\Contacts\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone_number')
                    ->default(null),
                TextInput::make('alternative_phone')
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('facebook')
                    ->default(null),
                TextInput::make('instagram')
                    ->default(null),
                TextInput::make('tiktok')
                    ->default(null),
                TextInput::make('address')
                    ->default(null),
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default('draft')
                    ->required(),
            ]);
    }
}
