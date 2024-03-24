<?php

namespace Modules\Accounts\App\Services;

use Illuminate\Support\Facades\Log;
use Modules\Admin\App\Models\Usertype;

class UserTypeService
{
    public static function createPayment($fields)
    {
        try {
            return Usertype::createPayment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getPayment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Usertype::getPayment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPayment($paymentId): JsonResponse
    {
        try {
            return response()->json(['data' => Usertype::getParticularPayment($paymentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePayment($paymentId): JsonResponse
    {
        try {
            Usertype::deletePayment($paymentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}