<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Details')
                    ->description('Enter the main details of this portfolio item.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Project Title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('client')
                            ->label('Client Name')
                            ->placeholder('e.g. Acme Corp'),

                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'Website'           => 'Website',
                                'Mobile App'        => 'Mobile App',
                                'Branding'          => 'Branding',
                                'UI/UX Design'      => 'UI/UX Design',
                                'E-Commerce'        => 'E-Commerce',
                                'Web Platform'      => 'Web Platform',
                                'Digital Marketing' => 'Digital Marketing',
                                'Other'             => 'Other',
                            ])
                            ->searchable()
                            ->native(false),

                        Textarea::make('description')
                            ->label('Project Description')
                            ->rows(4)
                            ->columnSpanFull(),

                        TextInput::make('link')
                            ->label('Project URL / Live Link')
                            ->url()
                            ->placeholder('https://example.com')
                            ->columnSpanFull(),
                    ]),

                Section::make('Project Image')
                    ->description('Upload a representative image or screenshot of the project.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Project Image')
                            ->image()
                            ->imageEditor()
                            ->directory('portfolios')
                            ->helperText('Recommended ratio: 4:3 (e.g. 1200×900px). This will be displayed as the project thumbnail.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
