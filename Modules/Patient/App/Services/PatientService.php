<?php

namespace Modules\Patient\App\Services;


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
    public static function createBooking($fields)
    {
        try {
            return Patient::createBooking($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getPatient($category,$search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Patient::getPatient($category,$search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getProfile(){
        try {
            return Patient::getProfile();
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