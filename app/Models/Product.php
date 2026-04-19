<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // use HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'sku',
        'price',
        'stock',
        'category_id',
        'image_url',
    ];
}
