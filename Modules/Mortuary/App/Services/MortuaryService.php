<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Mortuary\App\Models\Mortuary;
class MortuaryService
{
    public static function createMortuary($fields)
    {
        try {
            return Mortuary::createMortuary($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getMortuary($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Mortuary::getMortuary($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularMortuary($MortuaryId): JsonResponse
    {
        try {
            return response()->json(['data' => Mortuary::getParticularMortuary($MortuaryId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteMortuary($MortuaryId): JsonResponse
    {
        try {
            Mortuary::deleteMortuary($MortuaryId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}