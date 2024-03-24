<?php

namespace Modules\Accounts\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Accounts\Database\factories\PaymentFactory;
use Ramsey\Uuid\Uuid;

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
        return $query->where('quantity', 'like', '%'.$val.'%')
                    ->orWhere('payment_type','like', '%' .val.'%')
                    ->orWhere('amount','like', '%' .val.'%')
                    ->orWhere('date','like', '%' .val.'%')
                    ->orWhere('payment_status','like', '%' .val.'%')
                    ->orWhere('patients.first_name','like', '%' .val.'%');
    }

    protected static function createPayment($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'medicine_id'=> $fields['medicine_id'],
            'quantity'=> $fields['quantity'],
            'payment_type'=> $fields['payment_type'],
            'payment_status'=> $fields['payment_status'],
            'pharmacy_status'=> $fields['pharmacy_status'],
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
    public static function getParticularPayment($paymentId)
    {
        return self::whereId($paymentId)->with('creator')->get();
    }
    public static function updatePayment($paymentId, $fields)
    {
        self::whereId($paymentId)->update([
            'quantity'=> $fields['quantity'],
            'payment_type'=> $fields['payment_type'],
            'payment_status'=> $fields['payment_status'],
            'pharmacy_status'=> $fields['pharmacy_status'],
            'date' => $fields['date'],
        ]);
    }

    public static function deletePayment($paymentId)
    {
        self::whereId($paymentId)->delete();
    }
}
