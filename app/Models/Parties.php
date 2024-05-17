<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parties extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parties';
    public $fillable = ['image', 'parties', 'date', 'body', 'state'];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
