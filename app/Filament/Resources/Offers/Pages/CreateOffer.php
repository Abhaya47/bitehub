<?php

namespace App\Filament\Resources\Offers\Pages;

use App\Filament\Resources\Offers\OfferResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOffer extends CreateRecord
{
    protected static string $resource = OfferResource::class;

    //Redirect to the OffersResource index page after creating an offer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
