<?php

namespace Modules\Treatment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Treatment\Database\factories\TreatmentFactory;

class Treatment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): TreatmentFactory
    {
        //return TreatmentFactory::new();
    }
}
