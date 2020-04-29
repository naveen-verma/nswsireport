<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsComtributorsSpoc extends Model
{

    //
    protected $fillable = [
        'report_id',
        'spoc_id'
    ];
}
