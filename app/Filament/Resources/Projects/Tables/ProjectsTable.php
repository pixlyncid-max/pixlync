<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->height(50)
                    ->width(70)
                    ->defaultImageUrl(fn () => 'https://placehold.co/70x50?text=No+Img'),

                TextColumn::make('title')
                    ->label('Project Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),

                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->searchable(),

                TextColumn::make('layout')
                    ->label('Layout')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'large' => 'warning',
                        'wide'  => 'success',
                        default => 'gray',
                    }),

                IconColumn::make('featured')
                    ->label('Featured')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-minus'),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->color('gray')
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('featured')
                    ->label('Featured Status')
                    ->trueLabel('Featured only')
                    ->falseLabel('Non-featured only'),

                SelectFilter::make('layout')
                    ->label('Card Layout')
                    ->options([
                        'small' => 'Small',
                        'large' => 'Large',
                        'wide'  => 'Wide',
                    ]),

                SelectFilter::make('category')
                    ->label('Category')
                    ->searchable(),
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
