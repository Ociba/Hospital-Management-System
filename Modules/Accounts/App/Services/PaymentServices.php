<?php

namespace Modules\Accounts\App\Services;

use Illuminate\Support\Facades\Log;
use Modules\Accounts\App\Models\Payment;

class PaymentService
{
    public static function createPayment($fields)
    {
        try {
            return Payment::createPayment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getPayment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Payment::getPayment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPayment($paymentId): JsonResponse
    {
        try {
            return response()->json(['data' => Payment::getParticularPayment($paymentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePayment($paymentId): JsonResponse
    {
        try {
            Payment::deletePayment($paymentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}