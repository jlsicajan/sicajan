<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $table = "knowledge";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['knowledge', 'user_id'];
    protected $guarded = ['created_at', 'updated_at'];
}
