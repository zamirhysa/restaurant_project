<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TableLocation;
use App\Enums\TableStatus;


class Table extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'status',
        'guest_number',
        'location',
    ];
    protected $casts=[
        'status'=>TableStatus::class,
        'location'=>TableLocation::class
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
