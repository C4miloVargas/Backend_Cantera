<?php

use Illuminate\Support\Facades\Route;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        $tables = DB::select('SHOW TABLES');
        
        return response()->json([
            'status' => 'connected',
            'message' => 'Conexión exitosa a la base de datos',
            'tables' => $tables,
            'connection_info' => [
                'host' => env('DB_HOST'),
                'port' => env('DB_PORT'),
                'database' => env('DB_DATABASE')
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'connection_info' => [
                'host' => env('DB_HOST'),
                'port' => env('DB_PORT'),
                'database' => env('DB_DATABASE')
            ]
        ], 500);
    }
});