<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Patient\App\Models\Patient;
class PatientService
{
    public static function createPatient($fields)
    {
        try {
            return Patient::createPatient($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function createLoggedPatient($fields)
    {
        try {
            return Patient::createLoggedinPatient($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getPatient($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Patient::getPatient($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPatient($PatientId): JsonResponse
    {
        try {
            return response()->json(['data' => Patient::getParticularPatient($PatientId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePatient($PatientId): JsonResponse
    {
        try {
            Patient::deletePatient($PatientId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}