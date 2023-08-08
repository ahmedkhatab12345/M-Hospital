<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use App\Models\Doctor;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
class Section extends Model
{
    use Translatable; // 2. To add translation methods

    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name','description'];
    protected $fillable =['name','description'];
    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}

