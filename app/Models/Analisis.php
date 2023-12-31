<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    use HasFactory;
    protected $table = 'analisis';
    protected $guarded = [];

    public function Jawaban()
    {
        return $this->belongsTo(Jawaban::class, 'id_jawaban', 'id')->withDefault('-');
    }
}
