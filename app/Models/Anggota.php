<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    protected $table='anggotas';

    protected $primarykey = 'email';
    protected $fillable=['email', 'password','no_wa','alamat','image'];
}
