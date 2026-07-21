<?php

namespace App\Filament\Pages;

use App\Models\AboutSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageAboutSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-about-settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'About Page Settings';

    protected static ?int $navigationSort = 7;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    // Form state — one public property per field
    public ?string $hero_badge          = null;
    public ?string $hero_heading_line1  = null;
    public ?string $hero_heading_line2  = null;
    public ?string $hero_heading_suffix = null;
    public ?string $hero_description    = null;
    public mixed $hero_image            = null; // Filament FileUpload can hydrate as array

    public ?string $global_heading1    = null;
    public ?string $global_heading2    = null;
    public ?string $global_description = null;

    public ?string $stat1_value = null;
    public ?string $stat1_label = null;
    public ?string $stat2_value = null;
    public ?string $stat2_label = null;
    public ?string $stat3_value = null;
    public ?string $stat3_label = null;

    public ?string $offices = null;

    public function mount(): void
    {
        $settings = AboutSetting::getSingleton();
        $this->form->fill($settings->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->description('Text and image displayed at the top of the About page.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('hero_badge')
                                ->label('Badge Text (e.g. EST. 2018)')
                                ->maxLength(50),

                            TextInput::make('hero_heading_line1')
                                ->label('Heading — Line 1')
                                ->required(),

                            TextInput::make('hero_heading_line2')
                                ->label('Heading — Line 2 (highlighted)')
                                ->required(),

                            TextInput::make('hero_heading_suffix')
                                ->label('Heading — Suffix'),
                        ]),

                        Textarea::make('hero_description')
                            ->label('Sub-heading / Description')
                            ->rows(3)
                            ->columnSpanFull(),

                        FileUpload::make('hero_image')
                            ->label('Hero Image (replaces icon placeholder)')
                            ->image()
                            ->imageEditor()
                            ->directory('about')
                            ->helperText('Recommended: square ratio, at least 600×600px.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Global Reach Section')
                    ->description('The dark "A Borderless Collective" section with stats.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('global_heading1')
                                ->label('Heading — Line 1'),

                            TextInput::make('global_heading2')
                                ->label('Heading — Line 2 (highlighted)'),
                        ]),

                        Textarea::make('global_description')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull(),

                        TextInput::make('offices')
                            ->label('Office Locations')
                            ->helperText('Comma-separated, e.g. OSLO,TOKYO,NY,SINGAPORE')
                            ->columnSpanFull(),
                    ]),

                Section::make('Statistics')
                    ->description('The three big numbers shown in the Global Reach section.')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('stat1_value')->label('Stat 1 — Value')->placeholder('240+'),
                            TextInput::make('stat2_value')->label('Stat 2 — Value')->placeholder('18'),
                            TextInput::make('stat3_value')->label('Stat 3 — Value')->placeholder('04'),
                        ]),
                        Grid::make(3)->schema([
                            TextInput::make('stat1_label')->label('Stat 1 — Label')->placeholder('Projects Delivered'),
                            TextInput::make('stat2_label')->label('Stat 2 — Label')->placeholder('Global Partners'),
                            TextInput::make('stat3_label')->label('Stat 3 — Label')->placeholder('Design Awards'),
                        ]),
                    ]),
            ]);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->action('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();
        $settings = AboutSetting::getSingleton();
        $settings->update($data);

        Notification::make()
            ->title('About settings saved!')
            ->success()
            ->send();
    }
}

