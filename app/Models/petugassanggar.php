<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasSanggar extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    protected $table='petugas_sanggars';

    protected $primarykey = 'email';
    protected $fillable=['email', 'password','no_wa','alamat','image'];
}
