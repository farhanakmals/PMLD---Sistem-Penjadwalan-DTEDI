<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Kurikulum;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KurikulumResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KurikulumResource\RelationManagers;

class KurikulumResource extends Resource
{
    protected static ?string $model = Kurikulum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kurikulum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('prodi')->options([
                            'TRE'=>'TRE',
                            'TRI'=>'TRI',
                            'TRPL'=>'TRPL',
                            'TRIK'=>'TRIK',
                        ])->label('Prodi')->required(),
                        TextInput::make('kode_mk')->label('Kode MK')->required()->unique(ignorable:fn($record)=>$record),
                        TextInput::make('mata_kuliah_idn')->label('Mata Kuliah IN')->required(),
                        TextInput::make('mata_kuliah_en')->label('Mata Kuliah EN')->required(),
                        TextInput::make('sks')->label('SKS')->required(),
                        TextInput::make('kelompok')->label('Kelompok')->required(),
                        TextInput::make('jenis')->label('Jenis')->required(),
                        TextInput::make('semester')->label('Semester')->required(),
                        Select::make('P/T')->options([
                            'P'=>'Praktik',
                            'T'=>'Teori',
                        ])->label('P/T')->required(),
                        TextInput::make('afiliasi_lab')->label('Afiliasi Lab')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('prodi')->label('Prodi')->sortable()->searchable(),
                TextColumn::make('kode_mk')->label('Kode MK')->searchable(),
                TextColumn::make('mata_kuliah_idn')->label('Mata Kuliah IN')->sortable()->searchable(),
                TextColumn::make('mata_kuliah_en')->label('Mata Kuliah EN')->searchable(),
                TextColumn::make('sks')->label('SKS')->sortable()->searchable(),
                TextColumn::make('kelompok')->label('Kelompok')->sortable()->searchable(),
                TextColumn::make('jenis')->label('Jenis')->sortable()->searchable(),
                TextColumn::make('semester')->label('Semester')->sortable()->searchable(),
                TextColumn::make('P/T')->label('P/T')->sortable()->searchable(),
                TextColumn::make('afiliasi_lab')->label('Afiliasi Lab')->sortable()->searchable(),
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
            'index' => Pages\ListKurikulums::route('/'),
            'create' => Pages\CreateKurikulum::route('/create'),
            'edit' => Pages\EditKurikulum::route('/{record}/edit'),
        ];
    }
}
