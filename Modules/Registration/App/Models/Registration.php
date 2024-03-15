<?php

namespace Modules\Registration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Registration\Database\factories\RegistrationFactory;

class Registration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];
    
    protected static function newFactory(): RegistrationFactory
    {
        //return RegistrationFactory::new();
    }
}
