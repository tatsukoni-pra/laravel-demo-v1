<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HelthCheckController extends Controller
{
    /**
     * 'ok' レスポンスを返却する
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ok(): JsonResponse
    {
        return response()->json([
            'res' => 'ok'
        ]);
    }
}
