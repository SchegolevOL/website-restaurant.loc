<?php

namespace App\Helpers;

use App\Models\Testimonial;

class Functions
{
    public static function getUserById($testimonial, $users){

        foreach($users as $user){
            if($user->id == $testimonial->user_id){
                return $user;
            }
        }
        return 'null';
    }
}
