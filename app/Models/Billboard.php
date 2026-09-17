<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'name',
        'slug',
        'size',
        'orientation',
        'maps_link',
        'spesifikasi',
        'keterangan',
        'traffic_weekly_motor',
        'traffic_weekly_mobil',
        'traffic_weekly_bus',
        'traffic_weekly_truk',
        'traffic_monthly_motor',
        'traffic_monthly_mobil',
        'traffic_monthly_bus',
        'traffic_monthly_truk',
        'image_area',
        'image_denah',
        'status',
    ];
}
