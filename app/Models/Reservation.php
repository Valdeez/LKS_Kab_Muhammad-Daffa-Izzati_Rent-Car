<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'proof_of_payment',
        'payment_status',
        'status',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function car()
    {
        $this->belongsTo(Car::class);
    }
}
