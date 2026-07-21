<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Details')
                    ->description('Basic information about this service offering.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Service Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('Auto-generated from title. Used in URLs and references.')
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Service Description')
                            ->rows(4)
                            ->placeholder('Describe what this service offers…')
                            ->columnSpanFull(),
                    ]),

                Section::make('Features & CTA')
                    ->description("List what's included and the call-to-action label.")
                    ->schema([
                        TagsInput::make('features')
                            ->label('Feature List')
                            ->helperText('Press Enter after each feature to add it to the list.')
                            ->placeholder('Add a feature…')
                            ->columnSpanFull(),

                        TextInput::make('cta_label')
                            ->label('Call-to-Action Label')
                            ->required()
                            ->default('Learn More')
                            ->placeholder('e.g. Learn More, Get Started'),
                    ]),

                Section::make('Display Options')
                    ->description('Control the visual appearance of this service card.')
                    ->schema([
                        Select::make('variant')
                            ->label('Card Variant')
                            ->options([
                                'default'  => 'Default',
                                'featured' => 'Featured (Highlighted)',
                                'accent'   => 'Accent (Colored)',
                                'offset'   => 'Offset (Shifted layout)',
                            ])
                            ->required()
                            ->default('default')
                            ->native(false)
                            ->helperText('Controls the visual style of the service card on the frontend.'),

                        TextInput::make('icon')
                            ->label('Icon Name')
                            ->placeholder('e.g. heroicon-o-star')
                            ->helperText('Heroicon name or custom icon class.'),

                        TextInput::make('icon_bg')
                            ->label('Icon Background Color')
                            ->placeholder('e.g. #FF5733 or bg-blue-100')
                            ->helperText('CSS color value or Tailwind class for the icon background.'),
                    ])
                    ->columns(2),
            ]);
    }
}
