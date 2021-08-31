<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetails extends Model
{
    use HasFactory;
    protected $casts = [
        'idd' => 'array',
        'date' => 'array',
        'quan' => 'array',
        'unit_price' => 'array',
        'stot' => 'array',
    ];
    protected $fillable = [
        'idd',
        'invoice_id',
        'date',
        'prop',
        'depar',
        'quan',
        'unit_price',
        'stot',

    ];
}
