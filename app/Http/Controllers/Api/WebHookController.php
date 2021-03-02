<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class WebHookController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function receive(Request $request): JsonResponse
    {
        // check for headers
        if (empty($request->header('X-Header-From')) ||
            null === $request->header('X-Header-From')
        ) {
            Log::error('missing-header', $request->headers->all());

            return response()->json([], Response::HTTP_BAD_REQUEST);
        }
        Log::info('request-received', $request->all());

        return response()->json($request->all());
    }

}
