<?php

namespace Modules\Prescription\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Prescription\Database\factories\PrescriptionFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Prescription extends Model
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
    
    protected static function newFactory(): PrescriptionFactory
    {
        //return PrescriptionFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('indicator', 'like', '%'.$val.'%')
                    ->orWhere('test_type','like', '%' .val.'%')
                    ->orWhere('result_status','like', '%' .val.'%')
                    ->orWhere('rate','like', '%' .val.'%');
    }

    protected static function createPrescription(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'drug_id' => $fields['drug_id'],
            'days' => $fields['days'],
            'dose' => $fields['dose'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getPrescription($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'drug_name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }

    public static function getParticularPrescription($PrescriptionId)
    {
        return self::whereId($PrescriptionId)->with('creator')->get();
    }

    public static function updatePrescription($PrescriptionId, $fields)
    {
        self::whereId($PrescriptionId)->update([
            'drug_id' => $fields['drug_id'],
            'days' => $fields['days'],
            'dose' => $fields['dose'],
        ]);
    }

    public static function deletePrescription($PrescriptionId)
    {
        self::whereId($PrescriptionId)->delete();
    }
}
