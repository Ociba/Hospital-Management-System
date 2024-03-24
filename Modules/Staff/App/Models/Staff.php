<?php

namespace Modules\Staff\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Staff\Database\factories\StaffFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Staff extends Model
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
    
    protected static function newFactory(): StaffFactory
    {
        //return StaffFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('type', 'like', '%'.$val.'%');
    }

    protected static function createStaff($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'staff_category' => $fields['staff_category'],
            'department_id' => $fields['department_id'],
            'dob' => $fields['dob'],
            'experience' => $fields['experience'],
            'academic_document' => $fields['academic_document'],
            'language' => $fields['language'],
            'mobile_number' => $fields['mobile_number'],
            'photo' => $fields['photo'],
            'schedule' => $fields['schedule'],
            'updated_by' => $fields['updated_by'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getStaff($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'mobile_number';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }


    public static function getParticularStaff($staffId)
    {
        return self::whereId($staffId)->with('creator')->get();
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
