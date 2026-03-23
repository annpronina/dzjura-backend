<?php

namespace App\Filament\Resources\Instructors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class InstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Vārds, Uzvārds')
                    ->required()
                    ->maxLength(255),

                TextInput::make('categories')
                    ->label('Kategorijas')
                    ->required()
                    ->placeholder('AM, A, B, BE')
                    ->maxLength(255),

                TextInput::make('registered_since')
                    ->label('Instruktors kopš')
                    ->numeric()
                    ->maxValue(date('Y'))
                    ->required(),

                TextInput::make('phone')
                    ->label('Telefons')
                    ->required()
                    ->tel(),

                TextInput::make('email')
                    ->label('E-pasts')
                    ->email()
                    ->maxLength(255)
                    ->required(),

                Textarea::make('description')
                    ->label('Apraksts')
                    ->rows(5)
                    ->columnSpanFull()
                    ->required(),

                TextInput::make('car')
                    ->label('Transportlīdzeklis')
                    ->maxLength(255)
                    ->placeholder('VW T-Rock...')
                    ->required(),

                Toggle::make('is_active')
                    ->label('Aktīvs')
                    ->required(),
            ]);
    }
}
