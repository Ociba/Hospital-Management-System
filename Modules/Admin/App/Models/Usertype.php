<?php

namespace Modules\Admin\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\factories\UsertypeFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Usertype extends Model
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
    
    protected static function newFactory(): UsertypeFactory
    {
        //return UsertypeFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('type', 'like', '%'.$val.'%');
    }

    public static function createUsertype($fields){
        self::create([
            'id' => Uuid::uuid4(),
            'type' => $fields['type'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getUserType($search,$sortBy, $sortDirection, $perPage){
         // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'type';
        $sortDirection = $sortDirection ?: 'desc';
        return self::search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function updateService($typeId, $fields)
    {
        self::whereId($typeId)->update([
            'type' => $fields['type'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteUserType($typeId)
    {
        self::whereId($typeId)->delete();
    }
}
