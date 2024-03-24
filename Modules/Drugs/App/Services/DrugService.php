<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Drug\App\Models\Drug;
class DrugService
{
    public static function createDrug($fields)
    {
        try {
            return Drug::createDrug($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getDrug($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Drug::getDrug($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularDrug($DrugId): JsonResponse
    {
        try {
            return response()->json(['data' => Drug::getParticularDrug($DrugId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteDrug($DrugId): JsonResponse
    {
        try {
            Drug::deleteDrug($DrugId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}