<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable =
        [
            'name',
            'ap1',
            'ap2',
        ];
    public function groups()
    {
        return $this->hasOne(Group::class);
    }
}
