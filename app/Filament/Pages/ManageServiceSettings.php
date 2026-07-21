<?php

namespace App\Filament\Pages;

use App\Models\ServiceSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageServiceSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-service-settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Services Page Settings';
    protected static ?int $navigationSort = 8;
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    public ?string $hero_overline      = null;
    public ?string $hero_heading_line1 = null;
    public ?string $hero_heading_line2 = null;
    public ?string $hero_heading_line3 = null;
    public ?string $hero_description   = null;
    public ?string $process_heading    = null;
    public ?string $process_description = null;

    public function mount(): void
    {
        $settings = ServiceSetting::getSingleton();
        $this->form->fill($settings->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero_overline')->label('Overline Text (Small text above heading)')->columnSpanFull(),
                        TextInput::make('hero_heading_line1')->label('Heading Line 1'),
                        TextInput::make('hero_heading_line2')->label('Heading Line 2 (Italic)'),
                        TextInput::make('hero_heading_line3')->label('Heading Line 3'),
                        Textarea::make('hero_description')->label('Description')->rows(3)->columnSpanFull(),
                    ])->columns(3),

                Section::make('Process Section')
                    ->schema([
                        TextInput::make('process_heading')->label('Process Section Heading')->columnSpanFull(),
                        Textarea::make('process_description')->label('Process Description')->rows(3)->columnSpanFull(),
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
        ServiceSetting::getSingleton()->update($data);
        Notification::make()->title('Services settings saved!')->success()->send();
    }
}
