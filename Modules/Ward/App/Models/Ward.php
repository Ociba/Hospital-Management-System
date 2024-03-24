<?php

namespace Modules\Ward\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Ward\Database\factories\WardFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Ward extends Model
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
    
    protected static function newFactory(): WardFactory
    {
        //return WardFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('users.name', 'like', '%'.$val.'%');
    }

    protected static function createWard($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'ward_name'  => $fields['ward_name'],
            'ward_type'  => $fields['ward_type'],
            'drug_id'    => $fields['drug_id'],
            'ward_no'    => $fields['ward_no'],
            'bed_no'     => $fields['bed_no'],
            'admitted_on'=> $fields['admitted_on'],
            'ended_on'    => $fields['ended_on'],
            'care_taker_name'=> $fields['care_taker_name'],
            'care_taker_contact'=> $fields['care_taker_contact'],
            'status'=> $fields['status'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getWard($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'users.name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }


    public static function getParticularWard($WardId)
    {
        return self::whereId($WardId)->with('creator')->get();
    }


    public static function updateWard($ward_id, $fields)
    {
        self::whereId($ward_id)->update([
            'ward_name'  => $fields['ward_name'],
            'ward_type'  => $fields['ward_type'],
            'drug_id'    => $fields['drug_id'],
            'ward_no'    => $fields['ward_no'],
            'bed_no'     => $fields['bed_no'],
            'admitted_on'=> $fields['admitted_on'],
            'ended_on'    => $fields['ended_on'],
            'care_taker_name'=> $fields['care_taker_name'],
            'care_taker_contact'=> $fields['care_taker_contact'],
            'status'=> $fields['status'],
        ]);
    }

    public static function deleteWard($ward_id)
    {
        self::whereId($ward_id)->delete();
    }
}
