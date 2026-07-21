<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Member Info')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Full Name')
                                ->required()
                                ->maxLength(100),

                            TextInput::make('badge')
                                ->label('Badge / Specialty (shown on hover)')
                                ->placeholder('e.g. Creative Lead')
                                ->maxLength(60),
                        ]),

                        TextInput::make('role')
                            ->label('Job Title / Role')
                            ->required()
                            ->placeholder('e.g. Founder & Executive Creative Director')
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('Display Order')
                                ->helperText('Lower number = appears first')
                                ->numeric()
                                ->default(0),

                            Toggle::make('is_offset')
                                ->label('Offset Card (slightly lower position)')
                                ->helperText('Creates visual staggering in the team grid'),
                        ]),
                    ]),

                Section::make('Photo')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Profile Photo')
                            ->image()
                            ->imageEditor()
                            ->directory('team')
                            ->helperText('Recommended ratio: 4:5 portrait. At least 600×750px.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
