<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
//    protected $guarded = [
//        'img_id', 'ref_sender', 'ref_checker', 'user_ref_exp', 'user_click_x', 'user_click_y', 'ref_send_time', 'ref_check_time'
//    ];

    protected $guarded = [
        'id'
    ];

}
