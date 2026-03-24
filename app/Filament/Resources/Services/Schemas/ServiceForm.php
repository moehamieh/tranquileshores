<?php

namespace App\Filament\Resources\Services\Schemas;

use App\PublishStatus;
use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
                    ->columns(2)
                    ->components([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('subtitle'),
                        Select::make('category_id')
                            ->relationship('category', 'name', fn($query) => $query->where('type', 'service'))
                            ->searchable()
                            ->preload(),
                        FileUpload::make('image')
                            ->label('Image 600*400')
                            ->image()
                            ->disk('public')
                            ->directory('services')
                            ->visibility('public')
                            ->imagePreviewHeight('200')
                            ->required(),
                        TextInput::make('order')
                            ->numeric()
                            ->default(0),
                        Select::make('bg_color')
                            ->options([
                                '#FBF7F4' => 'Beige (#FBF7F4)',
                                '#FAEEB5' => 'Yellow (#FAEEB5)',
                                '#B5C8B8' => 'Green (#B5C8B8)',
                                '#F8DAD2' => 'Pink (#F8DAD2)',
                            ])
                            ->default('#FBF7F4')
                            ->required(),
                        Select::make('status')
                            ->options(PublishStatus::class)
                            ->default(PublishStatus::Draft->value)
                            ->required(),
                    ]),
                Section::make('Description')
                    ->components([
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
                    ]),
                Section::make('Accordions')
                    ->components([
                        Select::make('import_from_service_id')
                            ->label('Import Accordions From Another Service')
                            ->options(fn() => Service::query()->pluck('title', 'id'))
                            ->searchable()
                            ->placeholder('Select a service to import accordions from')
                            ->live()
                            ->afterStateUpdated(function (Set $set, ?int $state) {
                                if (!$state) {
                                    return;
                                }

                                $service = Service::with('accordions')->find($state);
                                if (!$service) {
                                    return;
                                }

                                $accordions = $service->accordions->map(function ($accordion) {
                                    return [
                                        'title' => $accordion->title,
                                        'content' => $accordion->content,
                                        'order' => $accordion->order,
                                    ];
                                })->toArray();

                                $set('accordions', $accordions);
                            })
                            ->dehydrated(false),

                        Repeater::make('accordions')
                            ->relationship('accordions')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                RichEditor::make('content')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'bulletList',
                                        'orderedList',
                                        'link',
                                        'undo',
                                        'redo',
                                    ])
                                    ->required(),
                                TextInput::make('order')
                                    ->numeric()
                                    ->default(0),
                            ])
                            ->reorderableWithButtons()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
