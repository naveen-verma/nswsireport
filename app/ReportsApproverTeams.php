<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsApproverTeams extends Model
{
    //
    protected $fillable = [
        'report_id',
        'spoc_id'
    ];
    
}
