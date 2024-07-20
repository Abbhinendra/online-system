<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table='requests';
    protected $fillable=[
              'title',
              'description',
              'name',
              'address1',
              'address2',
              'map_address',
              'city',
              'state',
              'zip',
              'email',
              'number',
              'date',
              'user_id',
              'technicine_id'
    ];

    public function technicine(){
        return $this->belongsTo(Technicine::class);
    }
}
