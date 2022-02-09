<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianPembelian extends Model
{
    use HasFactory;

    public $table = "rincian_pembelian";

    public $guarded = [];
}
