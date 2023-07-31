<?php
// app/Models/PriceOption.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceOption extends Model
{
    protected $fillable = ['name', 'price', 'price_category_id'];

    public function category()
    {
        return $this->belongsTo(PriceCategory::class, 'price_category_id');
    }
}
