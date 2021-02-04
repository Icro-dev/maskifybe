<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Post extends Model
{
    use HasFactory;
    //table name
    protected $table = 'posts';
    //PK
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    use HasTrixRichText;

    protected $guarded = [];

}
