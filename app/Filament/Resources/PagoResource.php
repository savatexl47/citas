<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PagoResource\Pages;
use App\Filament\Resources\PagoResource\RelationManagers;
use App\Models\Pago;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
//use App\Models\Asociado;

class PagoResource extends Resource
{
    protected static ?string $model = Pago::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('fecha')->format('Y-m-d')->displayFormat('d/m/Y')->default(now())
                ->required(),
                BelongsToSelect::make('conceptos_id')->relationship('conceptos', 'nombre')
                ->label(label:'Concepto')->required(),
                BelongsToSelect::make('asociados_id')->relationship('asociados', 'nombre')
                ->label(label:'Socio')->required(),
                BelongsToSelect::make('planes_id')->relationship('planes', 'nombre')
                ->label(label:'Plan')->required(),
                
                DatePicker::make('inicio')->format('Y-m-d')->displayFormat('d/m/Y')->required(),
                DatePicker::make('vencimiento')->format('Y-m-d')->displayFormat('d/m/Y')->required(),
                TextInput::make('moneda')->mask(fn (TextInput\Mask $mask) => $mask->money('S/', ',', 2))->required(),
                Select::make('forma')
                    ->options([
                        'efectivo' => 'Efectivo',
                        'tarjeta' => 'Tarjeta',
                    ])  
                    ->default('efectivo')
                    ->disablePlaceholderSelection(),
                BelongsToSelect::make('bancos_id')->relationship('bancos', 'nombre')
                ->label(label:'Banco')->required(),
                Forms\Components\TextInput::make('tipo_cuenta')->required(),
                Forms\Components\TextInput::make('numero_cuenta')->required(),
                Forms\Components\TextInput::make('tarjeta')->required(),
                Forms\Components\TextInput::make('numero_tarjeta')->required(),
                Forms\Components\TextInput::make('recibidor')->required(),
                Select::make('check_dscto')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])  
                    ->default('no')
                    ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('tarifa_dscto')->required(),
                Forms\Components\TextInput::make('autoriza_dscto')->required(),
                Forms\Components\TextInput::make('monto_dscto')->required(),
                Forms\Components\TextInput::make('monto_plan')->required(),
                Forms\Components\TextInput::make('monto_soles')->required(),
                Forms\Components\TextInput::make('monto_dolares')->required(),
                Forms\Components\TextInput::make('monto_tarjeta')->required(),
                Forms\Components\TextInput::make('tipo_documento')->required(),
                Forms\Components\TextInput::make('serie_documento')->required(),
                Forms\Components\TextInput::make('numero_documento')->required(),
                Select::make('check_empresa')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])  
                    ->default('no')
                    ->disablePlaceholderSelection(),
                BelongsToSelect::make('empresas_id')->relationship('empresas', 'razon_social')
                ->label(label:'Empresa')->required(),
                Forms\Components\TextInput::make('contrato')->required(),
                Textarea::make('observaciones')->rows(2),
                TimePicker::make('hora')->timezone('America/Lima')->default(now())->required(),
                //BelongsToSelect::make('users_id')->relationship('users', 'nombre')
                //->label(label:'Vendedor')->required(),
                Select::make('anula')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ])  
                    ->default('no')
                    ->disablePlaceholderSelection(),
                DatePicker::make('fecha_anula')->format('Y-m-d')->displayFormat('d/m/Y'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha'),
                Tables\Columns\TextColumn::make('concepto'),
                Tables\Columns\TextColumn::make('socio'),
                Tables\Columns\TextColumn::make('plan'),
                Tables\Columns\TextColumn::make('inicio'),
                Tables\Columns\TextColumn::make('vencimiento'),
                //Tables\Columns\TextColumn::make('moneda'),
                //Tables\Columns\TextColumn::make('forma'),
                //Tables\Columns\TextColumn::make('banco'),
                //Tables\Columns\TextColumn::make('tipo_cuenta'),
                //Tables\Columns\TextColumn::make('numero_cuenta'),
                //Tables\Columns\TextColumn::make('tarjeta'),
                //Tables\Columns\TextColumn::make('numero_tarjeta'),
                //Tables\Columns\TextColumn::make('recibidor'),
                //Tables\Columns\TextColumn::make('check_dscto'),
                //Tables\Columns\TextColumn::make('tarifa_dscto'),
                //Tables\Columns\TextColumn::make('autoriza_dscto'),
                //Tables\Columns\TextColumn::make('monto_dscto'),
                //Tables\Columns\TextColumn::make('monto_plan'),
                //Tables\Columns\TextColumn::make('monto_soles'),
                //Tables\Columns\TextColumn::make('monto_dolares'),
                //Tables\Columns\TextColumn::make('monto_tarjeta'),
                //Tables\Columns\TextColumn::make('tipo_documento'),
                //Tables\Columns\TextColumn::make('serie_documento'),
                //Tables\Columns\TextColumn::make('numero_documento'),
                //Tables\Columns\TextColumn::make('check_empresa'),
                //Tables\Columns\TextColumn::make('empresa'),
                //Tables\Columns\TextColumn::make('contrato'),
                //Tables\Columns\TextColumn::make('observaciones'),
                //Tables\Columns\TextColumn::make('hora'),
                //Tables\Columns\TextColumn::make('vendedor'),
                //Tables\Columns\TextColumn::make('anula'),
                //Tables\Columns\TextColumn::make('fecha_anula'),
                
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
            'index' => Pages\ListPagos::route('/'),
            'create' => Pages\CreatePago::route('/create'),
            'edit' => Pages\EditPago::route('/{record}/edit'),
        ];
    }
}
