<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportsDeploymentType extends Model
{

    //
    protected $fillable = [
        'report_id',
        'deployment_type_id'
    ];
}
