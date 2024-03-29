<?php

namespace Modules\Appointment\App\Models;

use Modules\Patient\App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Appointment\Database\factories\AppointmentFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Appointment extends Model
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
    
    protected static function newFactory(): AppointmentFactory
    {
        //return AppointmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('type', 'like', '%'.$val.'%');
    }

    protected static function makeAppointment(){
        $patient =Patient::createPatient();
        $patients_id = $patient->id;
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patients_id'],
            'service_id' => $fields['service_id'],
            'consultation_fee' => $fields['consultation_fee'],
            'date' => $fields['date'],
            'time' => $fields['time'],
            'appointment_status' =>$fields['appointment_status'],
            'consultation_room' =>$fields['consultation_room'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }
    protected static function selfAppointment($fields){
        $patient =Patient::createPatient();
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patients_id'],
            'service_id' => $fields['service_id'],
            'consultation_fee' => $fields['consultation_fee'],
            'date' => $fields['date'],
            'time' => $fields['time'],
            'consultation_room' =>$fields['consultation_room'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }
    public static function getAppointment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'date';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getParticularAppointment($AppointmentId)
    {
        return self::whereId($serviceId)->with('creator')->get();
    }
    public static function updatePatient($AppointmentId, $fields)
    {
        self::whereId($AppointmentId)->update([
            'service_id' => $fields['service_id'],
            'consultation_fee' => $fields['consultation_fee'],
            'date' => $fields['date'],
            'time' => $fields['time'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }

    public static function deleteAppointment($AppointmentId)
    {
        self::whereId($AppointmentId)->delete();
    }
}
