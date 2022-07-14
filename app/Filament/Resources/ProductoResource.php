<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductoResource\Pages;
use App\Filament\Resources\ProductoResource\RelationManagers;
use App\Models\Producto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\FileUpload;

class ProductoResource extends Resource
{
    protected static ?string $model = Producto::class;

    protected static ?string $navigationGroup = 'Productos';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                BelongsToSelect::make('categorias_id')->relationship('categorias', 'nombre'),
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('precio')->required(),
                Forms\Components\TextInput::make('stock')->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('categorias.nombre'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('precio'),
                Tables\Columns\TextColumn::make('stock'),
                
            ])
            ->filters([
                //
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
            'index' => Pages\ListProductos::route('/'),
            'create' => Pages\CreateProducto::route('/create'),
            'edit' => Pages\EditProducto::route('/{record}/edit'),
        ];
    }
}
