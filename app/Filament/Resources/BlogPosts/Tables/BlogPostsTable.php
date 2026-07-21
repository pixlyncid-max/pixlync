<?php

namespace App\Filament\Resources\BlogPosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class BlogPostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Cover')
                    ->height(50)
                    ->width(70)
                    ->defaultImageUrl(fn () => 'https://placehold.co/70x50?text=No+Img'),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),

                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->searchable()
                    ->placeholder('—'),

                TextColumn::make('author')
                    ->label('Author')
                    ->searchable()
                    ->placeholder('—'),

                TextColumn::make('read_time')
                    ->label('Read Time')
                    ->placeholder('—'),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-minus'),

                TextColumn::make('published_at')
                    ->label('Published')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('Not set'),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('is_featured')
                    ->label('Featured Status')
                    ->trueLabel('Featured only')
                    ->falseLabel('Non-featured only'),
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
