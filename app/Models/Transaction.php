<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['transastion_id', 'amount_of_ticket', 'total_price', 'concert_name', 'concert_address', 'concert_date'];
}


