<?php

namespace Modules\Mortuary\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Mortuary\Database\factories\MortuaryFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Mortuary extends Model
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
    
    protected static function newFactory(): MortuaryFactory
    {
        //return MortuaryFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('type', 'like', '%'.$val.'%');
    }

    protected static function createMortuary(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id'=> $fields['patient_id'],
            'date_received'=> $fields['date_received'],
            'date_taken'=> $fields['date_taken'],
            'updated_by' => $fields['updated_by'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getMortuary($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'patients.name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateStaff($staffId, $fields)
    {
        self::whereId($staffId)->update([
            'dob'           => $fields['dob'],
            'experience'    => $fields['experience'],
            'language'      => $fields['language'],
            'mobile_number' => $fields['mobile_number'],
            'schedule'      => $fields['schedule'],
        ]);
    }

    public static function deleteStaff($staffId)
    {
        self::whereId($staffId)->delete();
    }
}
