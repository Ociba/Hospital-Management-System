<?php

namespace Modules\Laboratory\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Laboratory\Database\factories\LaboratoryFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Laboratory extends Model
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
    
    protected static function newFactory(): LaboratoryFactory
    {
        //return LaboratoryFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('indicator', 'like', '%'.$val.'%')
                    ->orWhere('test_type','like', '%' .val.'%')
                    ->orWhere('result_status','like', '%' .val.'%')
                    ->orWhere('rate','like', '%' .val.'%');
    }

    protected static function createLabTest(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' => $fields['patient_id'],
            'test_type' => $fields['test_type'],
            'indicator' => $fields['indicator'],
            'result_status' => $fields['result_status'],
            'rate' => $fields['rate'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getLabTest($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'test_type';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateLabTest($lab_test_id, $fields)
    {
        self::whereId($lab_test_id)->update([
            'test_type' => $fields['test_type'],
            'indicator' => $fields['indicator'],
            'result_status' => $fields['result_status'],
            'rate' => $fields['rate'],
        ]);
    }

    public static function deleteLabTest($lab_test_id)
    {
        self::whereId($lab_test_id)->delete();
    }
}
