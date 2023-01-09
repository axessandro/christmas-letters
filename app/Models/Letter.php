<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'address', 'city', 'arrival_date', 'gift', 'text', 'kid_rating', 'delivered'];
}
