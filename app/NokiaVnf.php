<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NokiaVnf extends Model
{
    //
    protected $fillable = ['vnf_name','is_nsw_core_vnf','is_nsw_app_vnf'];
}
