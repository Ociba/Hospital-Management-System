<?php

namespace Modules\Treatment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Treatment\Database\factories\TreatmentFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Treatment extends Model
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
    
    protected static function newFactory(): TreatmentFactory
    {
        //return TreatmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('users.name', 'like', '%'.$val.'%');
    }

    protected static function createTreatment(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'prescription' => $fields['prescription'],
            'time_frame' => $fields['time_frame'],
            'pharmacy_status' => $fields['pharmacy_status'],
            'ward_status' => $fields['ward_status'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getTreatment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'users.name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateTreatment($treatment_id, $fields)
    {
        self::whereId($treatment_id)->update([
            'prescription' => $fields['prescription'],
            'time_frame' => $fields['time_frame'],
        ]);
    }

    public static function deleteTreatment($treatment_id)
    {
        self::whereId($treatment_id)->delete();
    }
}
