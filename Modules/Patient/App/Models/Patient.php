<?php

namespace Modules\Patient\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Patient\Database\factories\PatientFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;
use App\Models\User;
use Modules\Admin\App\Models\Service;

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
    
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'created_by');
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    protected static function newFactory(): PatientFactory
    {
        //return PatientFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('phone_number', 'like', '%'.$val.'%');
    }
    

    protected static function createPatient($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_name' => $fields['patient_name'],
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
        ]);
    }
    protected static function createBooking($fields){

        self::create([
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
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getPatient($category,$search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'phone_number';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')
        ->whereCategory($category)->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getProfile(){
        return self::with('creator')
        ->whereCreatedBy(auth()->user()->id)->get();
    }
    public static function getParticularPatient($PatientId)
    {
        return self::whereId($PatientId)->with('creator')->get();
    }

    public static function updatePatient($PatientId, $fields)
    {
        self::whereId($PatientId)->update([
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

    public static function deletePatient($PatientId)
    {
        self::whereId($PatientId)->delete();
    }
}
