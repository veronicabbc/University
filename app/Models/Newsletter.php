<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email'];
}
