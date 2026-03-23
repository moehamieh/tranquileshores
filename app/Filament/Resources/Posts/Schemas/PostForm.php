<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use App\Models\Therapist;
use App\PublishStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                FileUpload::make('main_image')
                    ->label('Main Image')
                    ->image()
                    ->disk('public')
                    ->directory('blog')
                    ->visibility('public')
                    ->required(),
                FileUpload::make('additional_images')
                    ->label('Additional Images')
                    ->image()
                    ->disk('public')
                    ->directory('blog')
                    ->visibility('public')
                    ->multiple()
                    ->reorderable(),
                Textarea::make('summary')
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->options(PublishStatus::class)
                    ->default(PublishStatus::Draft->value)
                    ->required(),
                DateTimePicker::make('published_at')
                    ->label('Published At'),
            ]);
    }
}
