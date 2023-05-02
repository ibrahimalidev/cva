<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DriverLicenseStatus extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = 'cv_pl_driver_license_status';

    protected $fillable = ['name'];

    protected $hidden = ['id', 'deleted_at'];
}
