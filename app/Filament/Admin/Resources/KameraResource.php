<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KameraResource\Pages;
use App\Filament\Admin\Resources\KameraResource\RelationManagers;
use App\Models\Kamera;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KameraResource extends Resource
{
    protected static ?string $model = Kamera::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kameras'),
                Forms\Components\TextInput::make('Model')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kameras'),
                Tables\Columns\TextColumn::make('Model')
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
            'index' => Pages\ListKameras::route('/'),
            'create' => Pages\CreateKamera::route('/create'),
            'edit' => Pages\EditKamera::route('/{record}/edit'),
        ];
    }
}
