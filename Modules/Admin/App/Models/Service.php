<?php

namespace Modules\Admin\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\factories\ServiceFactory;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Department\App\Models\Department;

class Service extends Model
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
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function updator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    protected static function newFactory(): ServiceFactory
    {
        //return ServiceFactory::new();
    }

    public function scopeSearch($query, $val)
    {
        return $query->where('service_name', 'like', '%'.$val.'%');
    }
    
    public static function createService($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'department_id' =>$fields['department_id'],
            'service_name' => $fields['service_name'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getServices($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'service_name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('department','creator','updator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getParticularService($serviceId)
    {
        return self::whereId($serviceId)->with('creator')->get();
    }
    public static function updateService($serviceId, $fields)
    {
        self::whereId($serviceId)->update([
            'department_id' =>$fields['department_id'],
            'service_name' => $fields['service_name'],
            'updated_by' => $fields['updated_by'],
        ]);
    }

    public static function deleteService($serviceId)
    {
        self::whereId($serviceId)->delete();
    }
}
