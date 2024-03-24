<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Description\App\Models\Description;
class DescriptionService
{
    public static function createDescription($fields)
    {
        try {
            return Description::createDescription($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getDescription($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Description::getDescription($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularDescription($DescriptionId): JsonResponse
    {
        try {
            return response()->json(['data' => Description::getParticularDescription($DescriptionId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteDescription($DescriptionId): JsonResponse
    {
        try {
            Description::deleteDescription($DescriptionId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}