<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Prescription\App\Models\Prescription;
class PrescriptionService
{
    public static function createPrescription($fields)
    {
        try {
            return Prescription::createPrescription($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getPrescription($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Prescription::getPrescription($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPrescription($PrescriptionId): JsonResponse
    {
        try {
            return response()->json(['data' => Prescription::getParticularPrescription($PrescriptionId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePrescription($PrescriptionId): JsonResponse
    {
        try {
            Prescription::deletePrescription($PrescriptionId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}