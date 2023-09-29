<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    
    // public function souscription()
    // {
    //     return $this->belongsTo(App\Models\service::class, 'servicesouscrit');
    // }

    protected $fillable = [
        "nomService",
        'descriptionService',
        

    ];
}
