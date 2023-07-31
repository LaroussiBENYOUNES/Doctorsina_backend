<?php
// app/Models/PriceCategory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceCategory extends Model
{
    protected $fillable = ['name', 'value'];

    public function options()
    {
        return $this->hasMany(PriceOption::class);
    }
}



