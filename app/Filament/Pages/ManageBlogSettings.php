<?php

namespace App\Filament\Pages;

use App\Models\BlogSetting;
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

class ManageBlogSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-blog-settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Blog Page Settings';
    protected static ?int $navigationSort = 10;
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    public ?string $newsletter_heading     = null;
    public ?string $newsletter_description = null;
    public ?string $newsletter_button_text = null;

    public function mount(): void
    {
        $settings = BlogSetting::getSingleton();
        $this->form->fill($settings->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Newsletter Section')
                    ->schema([
                        TextInput::make('newsletter_heading')->label('Heading')->columnSpanFull(),
                        Textarea::make('newsletter_description')->label('Description')->rows(3)->columnSpanFull(),
                        TextInput::make('newsletter_button_text')->label('Button Text')->columnSpanFull(),
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
        BlogSetting::getSingleton()->update($data);
        Notification::make()->title('Blog settings saved!')->success()->send();
    }
}
