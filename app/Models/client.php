<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    

     public function souscription()
     {
        // return $this->belongsTo(souscription::class , 'clientsouscrit');
        return $this->belongsTo(App\Models\client::class, "clientsouscrit");
     }

    protected $fillable = [
        "nomClient",
        'prenomClient',
        'contactClient',
        'emailClient',

    ];
}
