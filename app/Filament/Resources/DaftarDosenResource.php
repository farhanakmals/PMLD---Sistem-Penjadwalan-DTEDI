<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DaftarDosen;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DaftarDosenResource\Pages;
use App\Filament\Resources\DaftarDosenResource\RelationManagers;

class DaftarDosenResource extends Resource
{
    protected static ?string $model = DaftarDosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Daftar Dosen';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('nama_dosen')->label('Nama Dosen')->required(),
                    TextInput::make('jabatan_akademik')->label('Jabatan Akademik')->required(),
                    TextInput::make('nidn_nidk')->label('NIDN/NIDK')->required()->unique(ignorable:fn($record)=>$record),
                    TextInput::make('unit_kerja')->label('Unit Kerja')->required(),
                    TextInput::make('unit_kecil')->label('Unit Kecil')->required(),
                ])
                ->columns(2),
                ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_dosen')->label('Nama Dosen')->sortable()->searchable(),
                TextColumn::make('jabatan_akademik')->label('Jabatan Akademik')->sortable()->searchable(),
                TextColumn::make('nidn_nidk')->label('NIDN/NIDK')->sortable()->searchable(),
                TextColumn::make('unit_kerja')->label('Unit Kerja')->sortable()->searchable(),
                TextColumn::make('unit_kecil')->label('Unit Kecil')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDaftarDosens::route('/'),
            'create' => Pages\CreateDaftarDosen::route('/create'),
            'edit' => Pages\EditDaftarDosen::route('/{record}/edit'),
        ];
    }
}
