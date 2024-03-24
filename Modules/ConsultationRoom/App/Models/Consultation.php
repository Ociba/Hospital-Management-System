<?php

namespace Modules\ConsultationRoom\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ConsultationRoom\Database\factories\ConsultationFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Consultation extends Model
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
    
    protected static function newFactory(): ConsultationFactory
    {
        //return ConsultationFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('type', 'like', '%'.$val.'%');
    }

    protected static function makeConsultation(){
        $patient =Patient::createPatient();
        $patients_id = $patient->id;
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patients_id'],
            'sickness_history' => $fields['sickness_history'],
            'expected_test' => $fields['expected_test'],
            'department_id' => $fields['department_id'],
            'labaratory_status' =>$fields['labaratory_status'],
            'labaratory_results_feedback' =>$fields['labaratory_results_feedback'],
            'created_by' =>$fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }
    public static function getConsultation($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'patient_name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getParticularConsultation($ConsultationId)
    {
        return self::whereId($ConsultationId)->with('creator')->get();
    }
    public static function updateConsultation($ConsultationId, $fields)
    {
        self::whereId($ConsultationId)->update([
            'sickness_history' => $fields['sickness_history'],
            'expected_test' => $fields['expected_test'],
            'department_id' => $fields['department_id'],
            'labaratory_results_feedback' =>$fields['labaratory_results_feedback'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }

    public static function deleteConsultation($ConsultationId)
    {
        self::whereId($ConsultationId)->delete();
    }
}
