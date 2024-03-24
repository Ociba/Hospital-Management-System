<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Ward\App\Models\Ward;
class WardService
{
    public static function createWard($fields)
    {
        try {
            return Ward::createWard($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getWard($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Ward::getWard($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularWard($WardId): JsonResponse
    {
        try {
            return response()->json(['data' => Ward::getParticularWard($WardId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteWard($WardId): JsonResponse
    {
        try {
            Ward::deleteWard($WardId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}