<?php

namespace App\Filament\Resources\Notices\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class NoticesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->limit(50)
                    ->label('Title'),

                TextColumn::make('message')
                    ->limit(30)
                    ->label('Message'),

                TextColumn::make('target_role')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'customer' => 'Regular Users',
                        'owner' => 'Restaurant Owners',
                        'admin' => 'Administrators',
                        default => ucfirst($state),
                    })
                    ->label('Target Audience'),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'alert' => 'danger',
                        'announcement' => 'success',
                        'maintenance' => 'warning',
                        default => 'primary',
                    })
                    ->label('Type'),

                IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published'),

                TextColumn::make('published_at')
                    ->dateTime('M j, Y g:i A')
                    ->sortable()
                    ->label('Published At'),

                TextColumn::make('creator.name')
                    ->label('Created By')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('target_role')
                    ->options([
                        'customer' => 'Regular Users',
                        'owner' => 'Restaurant Owners',
                        'admin' => 'Administrators',
                    ]),

                SelectFilter::make('type')
                    ->options([
                        'notice' => 'General Notice',
                        'alert' => 'Alert',
                        'announcement' => 'Announcement',
                        'maintenance' => 'Maintenance',
                    ]),

                SelectFilter::make('is_published')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Draft',
                    ]),
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
