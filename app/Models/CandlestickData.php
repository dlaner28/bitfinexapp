<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CandlestickData extends Model
{
    use HasFactory;

    protected $fillable = ['cryptocurrency_id', 'currency_id', 'timestamp', 'open', 'high', 'low', 'close', 'volume'];


}
