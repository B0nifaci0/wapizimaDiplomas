<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_info extends Model
{
    use HasFactory;

    protected $table = 'certificate_infos';
    protected $fillable =
        [
            'name',
            'director_name',
            'director_signature',

        ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}

