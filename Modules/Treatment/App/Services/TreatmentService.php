<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Treatment\App\Models\Treatment;
class TreatmentService
{
    public static function createTreatment($fields)
    {
        try {
            return Treatment::createTreatment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getTreatment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Treatment::getTreatment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularTreatment($TreatmentId): JsonResponse
    {
        try {
            return response()->json(['data' => Treatment::getParticularTreatment($TreatmentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteTreatment($TreatmentId): JsonResponse
    {
        try {
            Treatment::deleteTreatment($TreatmentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}