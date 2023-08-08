<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Appointment extends Model
{
    use Translatable;
    public $translatedAttributes = ['name'];
    protected $fillable =['name'];
    use HasFactory;
}
