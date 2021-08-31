<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'prop',
        'date',
        'vat',
        'amount',
        'total',
        'status',


    ];


}
