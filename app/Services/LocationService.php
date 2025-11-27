<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LocationService
{

    public static function getLocationFromIP(string $ip): object
    {
        $userId = Auth::id();
        $sessionKey = 'user_location_' . $userId;

        // Check if location is already cached in session
        if (Session::has($sessionKey)) {
            return Session::get($sessionKey);
        }

        // For local testing
        if ($ip == '127.0.0.1' || $ip == '::1') {
            $ip = '124.41.204.21';
        }

        // Get location from IP
        $response = Http::get("http://ip-api.com/json/{$ip}");
        $data = $response->json();

        $position = (object) [
            'ip' => $data['query'] ?? $ip,
            'countryName' => $data['country'] ?? 'Unknown',
            'regionName' => $data['regionName'] ?? 'Unknown',
            'cityName' => $data['city'] ?? 'Unknown',
            'latitude' => $data['lat'] ?? null,
            'longitude' => $data['lon'] ?? null,
        ];

        // Cache in session for this user
        Session::put($sessionKey, $position);

        return $position;
    }
}
