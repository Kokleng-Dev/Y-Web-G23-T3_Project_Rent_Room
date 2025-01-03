<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenRoom extends Model
{
    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
