<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MilitaryStatus extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $table = 'cv_pl_military_status';

    protected $fillable = ['name'];

    protected $hidden = ['id', 'deleted_at'];
}
