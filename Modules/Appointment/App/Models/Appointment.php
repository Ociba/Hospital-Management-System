<?php

namespace Modules\Appointment\App\Models;

use Modules\Patient\App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Appointment\Database\factories\AppointmentFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;
use Modules\Admin\App\Models\Service;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    protected static function newFactory(): AppointmentFactory
    {
        //return AppointmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('date', 'like', '%'.$val.'%');
    }
    protected static function selfAppointment($fields){
        Patient::create([
            'id' => Uuid::uuid4(),
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'other_names' => $fields['other_names'],
            'date_of_birth' => $fields['date_of_birth'],
            'service_id' => $fields['service_id'],
            'gender' => $fields['gender'],
            'national_id_number' => $fields['national_id_number'],
            'home_district' => $fields['home_district'],
            'district_of_residence' => $fields['district_of_residence'],
            'county' => $fields['county'],
            'sub_county' => $fields['sub_county'],
            'parish' => $fields['parish'],
            'village' => $fields['village'],
            'phone_number' => $fields['phone_number'],
            'category' => $fields['category'],
            'next_of_kin' => $fields['next_of_kin'],
            'next_of_kin_contact' => $fields['next_of_kin_contact'],
            'next_of_kin_relationship' => $fields['next_of_kin_relationship'],
            'image' => $fields['image'],
            'created_by' => $fields['created_by'],
        ]);
        $patient =Patient::where('created_by',auth()->user()->id)->value('id');
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $patient,
            'service_id' => $fields['service_id'],
            'consultation_fee' => $fields['consultation_fee'],
            'date' => $fields['date'],
            'time' => $fields['time'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function anotherAppointment($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'service_id' => $fields['service_id'],
            'consultation_fee' => $fields['consultation_fee'],
            'date' => $fields['date'],
            'time' => $fields['time'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getAppointment($appointment_status,$search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'date';
        $sortDirection = $sortDirection ?: 'desc';
        //$query = self::with('creator','patient','service')->search($search)
         // Start building the query
        $query = self::with('creator', 'patient', 'service')->search($search);

        // Filter appointments based on the appointment_status
        if ($appointment_status === 'cancelled' || $appointment_status === 'pending' || $appointment_status === 'successful') {
            $query->where('appointment_status', $appointment_status);
        }

        // Apply sorting
        $query->orderBy($sortBy, $sortDirection);

        // Paginate the results
        return $query->paginate($perPage);
    }
    public static function getMyAppointment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'date';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator','service','patient')
        ->whereCreatedBy(auth()->user()->id)->search($search)
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
