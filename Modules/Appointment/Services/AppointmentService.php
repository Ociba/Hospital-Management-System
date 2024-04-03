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
    public static function createSelfAppointment($fields)
    {
        try {
            return Appointment::selfAppointment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function anotherAppointment($fields){
        try {
            return Appointment::anotherAppointment($fields);
        }catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getAppointment($appointment_status,$search, $sortBy, $sortDirection, $perPage)
    {
        //dd($appointment_status);
        try {
            return Appointment::getAppointment($appointment_status,$search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getMyAppointment($search, $sortBy, $sortDirection, $perPage){
        try {
            return Appointment::getMyAppointment($search, $sortBy, $sortDirection, $perPage);
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