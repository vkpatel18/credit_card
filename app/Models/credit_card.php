<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credit_card extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'card_number',
        'expire_date',
        'cvv',
        'bank_name',
        'owner_name',
        'card_type',
        'mobile_number',
        'is_delete',
    ];

    protected $table = 'credit_card.php';
}
