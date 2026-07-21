<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Content')
                    ->description('Enter the core details of this blog article.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Article Title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'Design'       => 'Design',
                                'Development'  => 'Development',
                                'Strategy'     => 'Strategy',
                                'Case Study'   => 'Case Study',
                                'News'         => 'News',
                                'Branding'     => 'Branding',
                                'Marketing'    => 'Marketing',
                            ])
                            ->searchable()
                            ->native(false),

                        TextInput::make('author')
                            ->label('Author Name')
                            ->placeholder('e.g. John Doe'),

                        Textarea::make('excerpt')
                            ->label('Excerpt / Short Description')
                            ->rows(3)
                            ->placeholder('A brief summary of this article…')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Cover Image')
                    ->description('Upload a representative image for this article.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Cover Image')
                            ->image()
                            ->imageEditor()
                            ->directory('blog-articles')
                            ->helperText('Recommended size: 1200×630px (16:9 ratio).')
                            ->columnSpanFull(),
                    ]),

                Section::make('Publishing')
                    ->description('Control visibility and publishing details.')
                    ->schema([
                        Grid::make(3)->schema([
                            DatePicker::make('published_at')
                                ->label('Publish Date')
                                ->helperText("Leave blank to use today's date."),

                            TextInput::make('read_time')
                                ->label('Read Time')
                                ->placeholder('e.g. 5 min read')
                                ->helperText('Estimated reading time shown to readers.'),

                            Toggle::make('is_featured')
                                ->label('Featured Article')
                                ->helperText('Featured articles appear prominently on the blog page.'),
                        ]),
                    ]),
            ]);
    }
}
