<?php

namespace App\Filament\Resources\Products\Schemas;

// use Filament\Forms\Components\RichEditor;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use App\Enum\StatusEnum;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),

                // RichEditor::make('description')->label('Description'),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),

                TextInput::make('price')
                    ->label('Price')
                    ->prefix('$')
                    ->required()
                    ->minValue(10)
                    ->maxValue(10000)
                    ->numeric()
                    ->step(0.01),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->nullable(),

                Select::make('tags')
                    ->label('Tags')
                    ->relationship('tags', 'name')
                    ->nullable()
                    ->multiple(),

                Select::make('status')
                    ->label('Status')
                    // ->options([
                    //     'active' => 'Active',
                    //     'inactive' => 'Inactive',
                    // ])
                    ->options(StatusEnum::class)
                    ->default('active')
                    ->required(),
            ]);
    }
}
