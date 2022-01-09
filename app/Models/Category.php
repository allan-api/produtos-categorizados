<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'status'
    ];

    public function allCategory()
    {
        return $this->orderBy('id', 'DESC')->get();
    }

    public function activeCategory()
    {
        return $this->where('status', 1)->orderBy('id', 'DESC')->get();
    }
}
