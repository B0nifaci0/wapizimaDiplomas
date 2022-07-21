<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_file extends Model
{
    use HasFactory;

    protected $table = 'certificate_files';
    protected $fillable =
        [
            'name',
            'url',
        ];
    public function certificate_infos()
    {
        return $this->hasMany(Certificate_info::class);
    }
}
