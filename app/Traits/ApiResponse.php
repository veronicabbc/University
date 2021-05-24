<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait ApiResponse
{
    /**
     * Return Data on JSON Response Format
     *
     * @return \Illuminate\Http\Response
     */
    public function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    public function messageResponse($message, $code = 200)
    {
        return response()->json([
            'message' => $message
        ], 200);
    }

    public function showAll(Collection $collection, $code = 200)
    {
        return $this->successResponse([
            'data' => $collection
        ], $code);
    }
}
