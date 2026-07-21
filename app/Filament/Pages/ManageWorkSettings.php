<?php

namespace App\Filament\Pages;

use App\Models\WorkSetting;
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

class ManageWorkSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-work-settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Work Page Settings';
    protected static ?int $navigationSort = 9;
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    public ?string $hero_heading_line1 = null;
    public ?string $hero_heading_badge = null;
    public ?string $hero_description   = null;
    public ?string $cta_heading        = null;
    public ?string $cta_description    = null;

    public function mount(): void
    {
        $settings = WorkSetting::getSingleton();
        $this->form->fill($settings->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero_heading_line1')->label('Heading Line 1'),
                        TextInput::make('hero_heading_badge')->label('Heading Badge (Rotated text)'),
                        Textarea::make('hero_description')->label('Description')->rows(3)->columnSpanFull(),
                    ])->columns(2),

                Section::make('Call To Action (CTA) Section')
                    ->schema([
                        TextInput::make('cta_heading')->label('CTA Heading')->columnSpanFull(),
                        Textarea::make('cta_description')->label('CTA Description')->rows(3)->columnSpanFull(),
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
        WorkSetting::getSingleton()->update($data);
        Notification::make()->title('Work settings saved!')->success()->send();
    }
}
