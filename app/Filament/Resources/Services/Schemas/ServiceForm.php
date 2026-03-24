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
                    ->label('Image 600*400')
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
                        '#FBF7F4' => 'Beige (#FBF7F4)',
                        '#FAEEB5' => 'Yellow (#FAEEB5)',
                        '#B5C8B8' => 'Green (#B5C8B8)',
                        '#F8DAD2' => 'Pink (#F8DAD2)',
                        '#FFFFFF' => 'White (#FFFFFF)',
                    ])
                    ->default('#FBF7F4')
                    ->required(),
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default(PublishStatus::Draft->value)
                    ->required(),
            ]);
    }
}
