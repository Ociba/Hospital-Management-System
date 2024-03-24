<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Laboratory\App\Models\Laboratory;
class LaboratoryService
{
    public static function createLaboratory($fields)
    {
        try {
            return Laboratory::createLabTest($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getLaboratory($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Laboratory::getLabTest($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularLaboratory($LaboratoryId): JsonResponse
    {
        try {
            return response()->json(['data' => Laboratory::getParticularLaboratory($LaboratoryId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteLaboratory($LaboratoryId): JsonResponse
    {
        try {
            Laboratory::deleteLaboratory($LaboratoryId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}