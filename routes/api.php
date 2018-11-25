<?php

use Symfony\Component\HttpFoundation\Request;

Route::get('/{uniqueId}', function (Image $uniqueId) {
    return response()->json([
        'image' => $uniqueId
    ]);
});

Route::post('/image', 'ImageController@store');