<?php

namespace Modules\Ward\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Ward\Database\factories\WardTreatmentFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class WardTreatment extends Model
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
    
    protected static function newFactory(): WardTreatmentFactory
    {
        //return WardTreatmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('users.name', 'like', '%'.$val.'%');
    }

    protected static function createWardTreatment(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'ward_id' => $fields['ward_id'],
            'number_of_days' => $fields['number_of_days'],
            'treatement_given' =>$fields['treatement_given'],
            'patient_condition' =>$fields['patient_condition'],
            'account_status' => $fields['account_status'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getWardTreatment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'users.name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateWardTreatment($ward_treatment_id, $fields)
    {
        self::whereId($ward_treatment_id)->update([
            'number_of_days' => $fields['number_of_days'],
            'treatement_given' =>$fields['treatement_given'],
            'patient_condition' =>$fields['patient_condition'],
        ]);
    }

    public static function deleteWardTreatment($ward_treatment_id)
    {
        self::whereId($ward_treatment_id)->delete();
    }
}
