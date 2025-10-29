<?php

namespace App\Filament\Resources\Reviews\Pages;

use App\Filament\Resources\Reviews\ReviewResource;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReview extends EditRecord
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = User::where('email', $data['email'])->first();
        $data['user_id'] = $user->id;
        unset($data['email']);
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user= User::where('id',$data['user_id'])->first();
        $data['email'] =$user->email;
        unset($data['user_id']);
        return $data;
    }
}
