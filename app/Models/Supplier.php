<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [

        'enterprise_name',
        'enterprise_address',
        'tel',
        'email',
        'enterprise_site',
        'production_capacity',
        'type_products',
        'category_products',
        'description'
    ];
}
