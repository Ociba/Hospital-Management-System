<?php

namespace Modules\Admin\Services;

use Illuminate\Support\Facades\Log;
use Modules\Admin\App\Models\Usertype;

class UserTypeService
{
    public static function createType($fields)
    {
        try {
            return Usertype::createUsertype($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getType($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Usertype::getUserType($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularType($typeId): JsonResponse
    {
        try {
            return response()->json(['data' => Usertype::getParticularPayment($typeId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteType($typeId): JsonResponse
    {
        try {
            Usertype::deleteUserType($typeId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}