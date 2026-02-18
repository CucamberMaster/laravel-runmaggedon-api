<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'time' => now()->toISOString(),
    ]);
});

Route::post('/echo', function (Request $request) {
    if (!$request->isJson()) {
        return response()->json([
            'error' => 'Content-Type musi być json'
        ], 400);
    }

    try {
        $data = $request->json()->all();
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Bledny JSON'
        ], 400);
    }

    if (empty($data)) {
        return response()->json([
            'error' => 'Pusty JSON body'
        ], 400);
    }

    return response()->json($data);
});
