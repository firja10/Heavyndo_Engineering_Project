<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;


    public function user()
    {
        # code...

        return $this->belongsTo(User::class);

    }


}
