<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->height(60)
                    ->width(80)
                    ->defaultImageUrl(fn () => 'https://placehold.co/80x60?text=No+Image'),

                TextColumn::make('title')
                    ->label('Project Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('client')
                    ->label('Client')
                    ->searchable()
                    ->placeholder('—'),

                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
