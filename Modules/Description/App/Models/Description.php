<?php

namespace Modules\Description\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Description\Database\factories\DescriptionFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Description extends Model
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
    
    protected static function newFactory(): DescriptionFactory
    {
        //return DescriptionFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('description', 'like', '%'.$val.'%')
                    ->orWhere('refer','like', '%' .val.'%');
    }

    protected static function createDescription(){
        self::create([
            'id' => Uuid::uuid4(),
            'description' => $fields['description'],
            'refer' => $fields['refer'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getDescription($search, $sortBy, $sortDirection, $perPage){
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'description';
        $sortDirection = $sortDirection ?: 'desc';
        return self::with('creator')->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getParticularDescription($DescriptionId)
    {
        return self::whereId($DescriptionId)->with('creator')->get();
    }
    public static function updateDescription($DescriptionId, $fields)
    {
        self::whereId($DescriptionId)->update([
            'description' => $fields['description'],
            'refer'       => $fields['refer'],
        ]);
    }

    public static function deleteDescription($DescriptionId)
    {
        self::whereId($DescriptionId)->delete();
    }
}
