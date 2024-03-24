<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\ConsultationRoom\App\Models\Consultation;
class ConsultationService
{
    public static function createConsultation($fields)
    {
        try {
            return Consultation::makeConsultation($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getConsultation($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Consultation::getConsultation($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularConsultation($ConsultationId): JsonResponse
    {
        try {
            return response()->json(['data' => Consultation::getParticularConsultation($ConsultationId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteService($ConsultationId): JsonResponse
    {
        try {
            Consultation::deleteService($ConsultationId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}