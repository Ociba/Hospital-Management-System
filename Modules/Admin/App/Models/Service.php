<?php

namespace Modules\Admin\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\factories\ServiceFactory;
use Ramsey\Uuid\Uuid;

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

    public function updator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
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
            'service_name' => $fields['service_name'],
            'created_by' => $fields['created_by'],
            'updated_by' => $fields['updated_by'],
        ]);
    }
    public static function getServices($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'service_name';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator','updator')->search($search)
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
            'service_name' => $fields['service_name'],
            'updated_by' => $fields['updated_by'],
        ]);
    }

    public static function deleteService($serviceId)
    {
        self::whereId($serviceId)->delete();
    }
}
