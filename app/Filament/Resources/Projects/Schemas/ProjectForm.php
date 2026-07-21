<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Details')
                    ->description('Core information about this project.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Project Title')
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

                        TextInput::make('category')
                            ->label('Category')
                            ->required()
                            ->placeholder('e.g. Branding, Web Design, Mobile App'),

                        TextInput::make('filter')
                            ->label('Filter Tag')
                            ->required()
                            ->placeholder('e.g. branding, web, mobile')
                            ->helperText('Used for portfolio filtering on the frontend.'),

                        Textarea::make('description')
                            ->label('Project Description')
                            ->required()
                            ->rows(4)
                            ->placeholder('Describe the project and what was accomplished…')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Project Image')
                    ->description('Upload a representative image or screenshot of the project.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Project Image')
                            ->image()
                            ->imageEditor()
                            ->directory('projects')
                            ->helperText('Recommended ratio: 4:3 (e.g. 1200×900px). Displayed as the project thumbnail.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Display Options')
                    ->description('Control how this project is displayed in the portfolio grid.')
                    ->schema([
                        Select::make('layout')
                            ->label('Card Layout')
                            ->options([
                                'small' => 'Small',
                                'large' => 'Large',
                                'wide'  => 'Wide',
                            ])
                            ->required()
                            ->default('small')
                            ->native(false)
                            ->helperText('Controls the size of this project card in the grid.'),

                        TextInput::make('cta_label')
                            ->label('CTA Button Label')
                            ->required()
                            ->default('VIEW PROJECT')
                            ->placeholder('e.g. VIEW PROJECT'),

                        Toggle::make('featured')
                            ->label('Featured Project')
                            ->helperText('Featured projects are highlighted on the homepage.'),
                    ])
                    ->columns(2),
            ]);
    }
}
