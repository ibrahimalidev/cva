<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenderStatus extends Model
{
    use HasFactory, Uuids, SoftDeletes;

    protected $table = 'cv_pl_gender_status';

    protected $fillable =['name'];

    protected $hidden = ['id', 'deleted_at'];
}
