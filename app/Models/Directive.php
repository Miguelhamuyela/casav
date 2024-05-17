<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Directive extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'directives';
    public $fillable = ['title', 'file', 'fk_idCategory'];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function category(){

        return $this->belongsTo(DirectiveCategory::class, 'fk_idCategory');
    }
}
