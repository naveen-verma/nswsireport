<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class TopCustomers extends Model
{

    //
    protected $fillable = [
        'customer_name',
        'customer_country',
        'region_id',
        'customer_market_unit',
        'customer_ct_name'
    ];
}
