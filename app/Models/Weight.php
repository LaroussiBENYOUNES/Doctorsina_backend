<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'value','patient_id','added_at'
    ];
    public function patient(){
        return $this->belongsTo(User::class);
    }
}
