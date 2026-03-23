<?php

namespace App\Filament\Resources\Services\Schemas;

use App\PublishStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')
                    ->label('Image 600*400')
                    ->image()
                    ->disk('public')
                    ->directory('categories')
                    ->visibility('public')
                    ->imageEditor()
                    ->imagePreviewHeight('200')
                    // ->imageAspectRatio('16:9')
                    // ->automaticallyOpenImageEditorForAspectRatio()

                    // ->maxSize(2048)
                    ->required(),
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
                Select::make('status')
                    ->options(PublishStatus::class)
                    ->default('draft')
                    ->required(),
            ]);
    }
}
