<?php

namespace Modules\Accounts\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Accounts\Database\factories\PaymentFactory;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];
    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    protected static function newFactory(): PaymentFactory
    {
        //return PaymentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('paid_for', 'like', '%'.$val.'%')
                    ->orWhere('paid_for','like', '%' .val.'%')
                    ->orWhere('amount','like', '%' .val.'%')
                    ->orWhere('date','like', '%' .val.'%')
                    ->orWhere('payment_type','like', '%' .val.'%');
    }

    protected static function createPayment(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'paid_for' => $fields['paid_for'],
            'amount' => $fields['amount'],
            'payment_type' => $fields['payment_type'],
            'date' => $fields['date'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }
    public static function getPayment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'date';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updatePayment($payment_id, $fields)
    {
        self::whereId($payment_id)->update([
            'date' => $fields['date'],
            'paid_for' => $fields['paid_for'],
            'amount' => $fields['amount'],
            'payment_type' => $fields['payment_type'],
        ]);
    }

    public static function deletePayment($payment_id)
    {
        self::whereId($payment_id)->delete();
    }
}
