<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Service Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->color('gray')
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(60)
                    ->placeholder('—'),

                TextColumn::make('variant')
                    ->label('Variant')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'featured' => 'warning',
                        'accent'   => 'success',
                        'offset'   => 'info',
                        default    => 'gray',
                    }),

                TextColumn::make('cta_label')
                    ->label('CTA Label')
                    ->placeholder('—'),

                TextColumn::make('icon')
                    ->label('Icon')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('variant')
                    ->label('Card Variant')
                    ->options([
                        'default'  => 'Default',
                        'featured' => 'Featured',
                        'accent'   => 'Accent',
                        'offset'   => 'Offset',
                    ]),
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
