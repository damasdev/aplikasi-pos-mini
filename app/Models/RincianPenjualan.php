<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianPenjualan extends Model
{
    use HasFactory;

    public $table = "rincian_penjualan";

    public $guarded = [];
}
