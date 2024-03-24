<?php

namespace Modules\App\Services;


use Illuminate\Support\Facades\Log;
use Modules\Theatre\App\Models\Theatre;
class TheatreService
{
    public static function createTheatre($fields)
    {
        try {
            return Theatre::createTheatre($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getTheatre($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Theatre::getTheatre($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularTheatre($TheatreId): JsonResponse
    {
        try {
            return response()->json(['data' => Theatre::getParticularTheatre($TheatreId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteTheatre($TheatreId): JsonResponse
    {
        try {
            Theatre::deleteTheatre($TheatreId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}