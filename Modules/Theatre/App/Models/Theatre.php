<?php

namespace Modules\Theatre\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Theatre\Database\factories\TheatreFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Theatre extends Model
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
    
    protected static function newFactory(): TheatreFactory
    {
        //return TheatreFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('users.name', 'like', '%'.$val.'%');
    }

    protected static function createTheatre(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'surgery_category'=> $fields['surgery_category'],
            'surgery_type'=> $fields['surgery_type'],
            'date_and_time'=> $fields['date_and_time'],
            'surgery_status'=> $fields['surgery_status'],
            'medication'=> $fields['medication'],
            'ward_status' => $fields['ward_status'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getTheatre($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'users.name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateTheatre($theatre_id, $fields)
    {
        self::whereId($theatre_id)->update([
            'surgery_category'=> $fields['surgery_category'],
            'surgery_type'=> $fields['surgery_type'],
            'date_and_time'=> $fields['date_and_time'],
            'surgery_status'=> $fields['surgery_status'],
            'medication'=> $fields['medication'],
        ]);
    }

    public static function deleteTheatre($theatre_id)
    {
        self::whereId($theatre_id)->delete();
    }
}
