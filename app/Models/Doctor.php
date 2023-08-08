<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Doctor extends Model
{
    use Translatable;
    public $translatedAttributes = ['name','appointments'];
    protected $fillable =['email','email_verified_at','password','phone','name','section_id','status'];
    use HasFactory;

    /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }
}


