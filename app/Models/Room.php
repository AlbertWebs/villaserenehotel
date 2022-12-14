<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'room_number', 'room_type', 'meal', 'comment', 'cancellation_charges', 'bed_capacity', 'price', 'slug','thumbnail'
    ];
}

