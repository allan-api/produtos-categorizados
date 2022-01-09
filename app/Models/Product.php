<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'status',
        'category_id'
    ];


    public function product()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function index()
    {
        return $this->select('products.id', 'products.name as product', 'products.description', 'categories.name as category')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->orderBy('products.id', 'DESC')
            ->get();
    }
}
