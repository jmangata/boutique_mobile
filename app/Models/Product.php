<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table= 'products';
    protected $fillable = ['name','categories_id','image','description','news','price'];

    //liaison eloquent belong to pour lire le contenue de la category du produit
    /**
     * Get all of the product for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->belongsTo(Category::class);
    }
    
}
