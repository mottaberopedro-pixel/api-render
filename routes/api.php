<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function () {
    return response()->json(['ok' => true]);
});

Route::get('/empresa', function(){
    return response()->json([
        'nome' => 'Minha Empresa LTDA',
        'cidade' => 'São Paulo',
    ]);
}); 

Route::get('/servico', function(){
    return response()->json([
        'serviço'=> [
            'desenvolvimento de software',
            'consultoria em TI',
            'suporte técnico',
        ]
    ]);
});
