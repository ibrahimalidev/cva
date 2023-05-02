<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait Uuids
{
    /**
     * Add behavior to creating and saving Eloquent events.
     * @return void
     */
    public static function bootUuids()
    {
        // Create a UUID to the model if it does not have one
        static::creating(function (Model $model) {
            $model->uuid = (string)Str::uuid();
        });


    }
}
