<?php

namespace Modules\ConsultationRoom\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ConsultationRoom\Database\factories\ConsultationFactory;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): ConsultationFactory
    {
        //return ConsultationFactory::new();
    }
}
