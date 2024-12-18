<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Case1Resource\Pages;
use App\Filament\Resources\Case1Resource\RelationManagers;
use App\Models\Case1;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Case1Resource extends Resource
{
    protected static ?string $model = Case1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(name: 'name')->required()->placeholder('Enter Name')->columnspan(2),
                RichEditor::make('description')->required()->label('Enter Description')->columnspan(2),
                Select::make('status')->options([
                    1=>'Active',
                    0=>'Inactive'
                ]),

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCase1s::route('/'),
            'create' => Pages\CreateCase1::route('/create'),
            'edit' => Pages\EditCase1::route('/{record}/edit'),
        ];
    }
}
