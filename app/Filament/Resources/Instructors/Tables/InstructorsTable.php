<?php

namespace App\Filament\Resources\Instructors\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InstructorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Vārds, uzvārds')
                    ->searchable(),

                TextColumn::make('categories')
                    ->label('Kategorijas')
                    ->searchable(),

                TextColumn::make('registered_since')
                    ->label('Instruktors kopš')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('Telefons')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('E-pasts')
                    ->searchable(),

                TextColumn::make('car')
                    ->label('Transportlīdzeklis')
                    ->searchable(),

                IconColumn::make('is_active')
                    ->label('Aktīvs')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Izveidots')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
