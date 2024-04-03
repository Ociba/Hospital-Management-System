<?php

namespace Modules\Admin\Services;


use Illuminate\Support\Facades\Log;
use Modules\Admin\App\Models\Service;
class HospitalService
{
    public static function createService($fields)
    {
        try {
            return Service::createService($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getService($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Service::getServices($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularService($ServiceId): JsonResponse
    {
        try {
            return response()->json(['data' => Service::getParticularService($ServiceId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteService($ServiceId): JsonResponse
    {
        try {
            Service::deleteService($ServiceId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}