<?php

namespace App\Filament\Resources\Messages\Pages;

use App\Filament\Resources\Messages\MessageResource;
use App\Models\User;
use App\Services\FilamentMessageReviewLogic;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMessage extends EditRecord
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return FilamentMessageReviewLogic::handleSave($data);
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user= User::where('id',$data['user_id'])->first();
        $data['email'] =$user->email;
        unset($data['user_id']);
        return $data;
    }
}
