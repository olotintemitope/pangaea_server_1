<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebHookController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function receive(Request $request): JsonResponse
    {
        Log::info('request-received', $request->all());

        return response()->json($request->all());
    }

}
