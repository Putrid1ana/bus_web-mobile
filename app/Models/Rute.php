<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function transportasi()
    {
        return $this->belongsTo('App\Models\Transportasi', 'transportasi_id');
    }

    public function trans(){
        return $this->belongsTo(Transportasi::class, 'transportasi_id', 'id');
    }

    protected $table = 'rute';
}
