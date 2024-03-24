<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Staff\App\Models\Staff;
class StaffService
{
    public static function createStaff($fields)
    {
        try {
            return Staff::createStaff($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getStaff($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Staff::getStaff($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularStaff($StaffId): JsonResponse
    {
        try {
            return response()->json(['data' => Staff::getParticularStaff($StaffId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteStaff($StaffId): JsonResponse
    {
        try {
            Staff::deleteStaff($StaffId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}