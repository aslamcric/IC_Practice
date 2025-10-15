<?php

namespace App\Filament\Resources\Products\Tables;

use App\Enum\StatusEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('description')->label('Description')->limit(50),
                TextColumn::make('price')->label('Price')->money('USD', true)->sortable(),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('tags.name')->label('Tags')->badge()->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('status')->label('Status')->badge()->sortable(),
                TextColumn::make('created_at')->label('Created')->toggleable(),
            ])

            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    // ->options([
                    //     'active' => 'Active',
                    //     'inactive' => 'Inactive',
                    // ])
                    ->options(StatusEnum::class),

                SelectFilter::make('category.name')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->multiple()
            ])

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])


            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
