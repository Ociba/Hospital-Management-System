<?php

namespace Modules\Department\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Department\Database\factories\DepartmentFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Department extends Model
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
    
    protected static function newFactory(): DepartmentFactory
    {
        //return DepartmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('department', 'like', '%'.$val.'%');
    }

    protected static function createDepartment(){
        self::create([
            'id' => Uuid::uuid4(),
            'department' => $fields['department'],
            'description' => $fields['description'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getDepartment($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'department';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateDepartment($department_id, $fields)
    {
        self::whereId($department_id)->update([
            'department' => $fields['department'],
        ]);
    }

    public static function deleteDepartment($department_id)
    {
        self::whereId($department_id)->delete();
    }
}
