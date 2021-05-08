<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slucaj extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'naziv',
        'opis',
        'korisnik',
        'tipSlucaja',
        'arhiviran',
        'user_id',
     
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
