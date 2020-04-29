<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsOfferType extends Model
{

    //
    protected $fillable = [
        'report_id',
        'offer_type_id'
    ];
}
