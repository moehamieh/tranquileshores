<?php

namespace App\Filament\Resources\Services\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                FileUpload::make('image')
                    ->label('Image 1024 * 710')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name', fn($query) => $query->where('type', 'service'))
                    ->searchable()
                    ->preload(),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'undo',
                        'redo',
                    ])
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
                Select::make('bg_color')
                    ->options([
                        '#F4F4EF' => 'Warm White',
                        '#9A9A83' => 'Olive Green',
                        '#EFA18A' => 'Sunset',
                        '#264C6B' => 'Ocean Blue',
                        '#CFCFE1' => 'Lavender',
                        '#6565A9' => 'Purple',
                    ])
                    ->default('#F4F4EF')
                    ->required(),
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default(PublishStatus::Draft->value)
                    ->required(),
            ]);
    }
}
