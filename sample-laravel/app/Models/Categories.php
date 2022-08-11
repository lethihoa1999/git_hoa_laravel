<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = [
        'id',
        'name', 
        'description'
    ];
}
