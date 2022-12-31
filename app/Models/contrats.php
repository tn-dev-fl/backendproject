<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrats extends Model
{
    protected $fillable = ['datedebut','datefin','redevence','client_id','valsync'];
    use HasFactory;
}
