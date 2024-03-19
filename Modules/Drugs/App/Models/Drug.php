<?php

namespace Modules\Drugs\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Drugs\Database\factories\DrugFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Drug extends Model
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
    
    protected static function newFactory(): DrugFactory
    {
        //return DrugFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('drug_name', 'like', '%'.$val.'%')
                    ->orWhere('drug_type','like', '%' .val.'%')
                    ->orWhere('quantity','like', '%' .val.'%')
                    ->orWhere('composition','like', '%' .val.'%');
    }

    protected static function createDrug(){
        self::create([
            'id' => Uuid::uuid4(),
            'patient_id' =>$fields['patient_id'],
            'doctor_id'  =>$fields['doctor_id'],
            'drug_name' => $fields['drug_name'],
            'drug_type' => $fields['drug_type'],
            'quantity' => $fields['quantity'],
            'composition' => $fields['composition'],
            'drug_prescription' => $fields['drug_prescription'],
            'created_by' => $fields['created_by'],
            'updated_by' =>$fields['updated_by'],
        ]);
    }
    public static function getDrug($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'drug_name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateDrug($drug_id, $fields)
    {
        self::whereId($drug_id)->update([
            'drug_name' => $fields['drug_name'],
            'drug_type' => $fields['drug_type'],
            'quantity' => $fields['quantity'],
            'composition' => $fields['composition'],
            'drug_prescription' => $fields['drug_prescription'],
        ]);
    }

    public static function deleteDrug($drug_id)
    {
        self::whereId($drug_id)->delete();
    }
}
