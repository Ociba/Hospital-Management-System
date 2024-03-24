<?php

namespace Modules\Appointment\Services;


use Illuminate\Support\Facades\Log;
use Modules\Appointment\App\Models\Appointment;
class AppointmentService
{
    public static function createAppointment($fields)
    {
        try {
            return Appointment::makeAppointment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getAppointment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Appointment::getAppointment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularAppointment($AppointmentId): JsonResponse
    {
        try {
            return response()->json(['data' => Appointment::getParticularAppointment($AppointmentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteService($AppointmentId): JsonResponse
    {
        try {
            Appointment::deleteService($AppointmentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}