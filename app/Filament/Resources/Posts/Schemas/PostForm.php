<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Content')
                    ->description('Write your blog post content below.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Post Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                            ->columnSpanFull(),

                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('This is the URL-friendly version of the title. Auto-generated from the title.')
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Content')
                            ->toolbarButtons([
                                'attachFiles', 'bold', 'bulletList', 'codeBlock',
                                'h2', 'h3', 'italic', 'link', 'orderedList',
                                'redo', 'strike', 'underline', 'undo',
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Meta & Publishing')
                    ->description('Configure how and when this post is published.')
                    ->schema([
                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'Design'        => 'Design',
                                'Development'   => 'Development',
                                'Strategy'      => 'Strategy',
                                'Case Study'    => 'Case Study',
                                'News'          => 'News',
                            ])
                            ->searchable()
                            ->native(false),

                        Toggle::make('is_published')
                            ->label('Published')
                            ->helperText('Toggle on to make this post visible on the frontend.')
                            ->required(),

                        DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->helperText('Leave blank to use current time when toggled published.'),

                        FileUpload::make('image')
                            ->label('Cover Image')
                            ->image()
                            ->imageEditor()
                            ->directory('posts')
                            ->helperText('Recommended size: 1200×630px.'),
                    ]),
            ]);
    }
}
