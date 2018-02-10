<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
    	'id', 'img_src', 'target_ref_exp', 'target_x', 'target_y', 'target_w', 'target_h'
    ];
}
