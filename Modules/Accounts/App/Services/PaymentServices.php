<?php

namespace Modules\Accounts\App\Services;

use Illuminate\Support\Facades\Log;
use Modules\Accounts\App\Models\Payment;

class PaymentService
{
    public static function createFinancialStatement($fields)
    {
        try {
            FinancialStatement::createFinancialStatement($fields);
        } catch (\Exception $e) {
            Log::error('Error creating financial statement: '.$e->getMessage());
            Log::error($e->getTraceAsString());

            return 'An error occurred. Please check the logs for details.';
            // return "An error occurred ". $e->getMessage();
        }
    }
}