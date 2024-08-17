<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicine extends Model
{
    use HasFactory;
    protected $table='technicines';
    protected $fillable=[
              'name',
              'number',
              'email'
    ];

}
