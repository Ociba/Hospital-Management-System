<?php

namespace Modules\Patient\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Patient\Database\factories\PatientFactory;

class Patient extends Model
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
    
    protected static function newFactory(): PatientFactory
    {
        //return PatientFactory::new();
    }
    protected static function createPatient(){
        
        self::create([
            'id' => Uuid::uuid4(),
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
            'appointment_status' => $fields['appointment_status'],
        ]);
    }
    public static function getPatient($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'phone_number';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updatePatient($patientId, $fields)
    {
        self::whereId($patientId)->update([
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
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }

    public static function deletePatient($patientId)
    {
        self::whereId($patientId)->delete();
    }
}
