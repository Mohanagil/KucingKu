<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'adopter';

    public function kucing(){
        return $this->belongsTo(Kucing::class,'nama','ras','id');
    }
}
