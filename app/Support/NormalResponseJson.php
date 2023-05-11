<?php

namespace App\Support;

class  NormalResponseJson
{
    public static function normalizeResponse( $data, $error): \Illuminate\Support\Collection
    {
        $response = collect([]);
        if (!$error) {
            $response->put('data', $data);
            $response->put('success', true);
        } else {
            $response->put('message', $data);
            $response->put('error', true);
        }
        return $response;
    }
}
