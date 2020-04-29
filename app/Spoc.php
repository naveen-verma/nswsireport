<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Spoc extends Model
{

    //
    protected $fillable = [
        'spoc_name',
        'spoc_nokia_id',
        'spoc_email',
        'spoc_contact_number',
        'department',
        'is_core_services_spoc',
        'is_care_spoc',
        'is_cb_spoc',
        'is_ssl_spoc'
    ];
}
