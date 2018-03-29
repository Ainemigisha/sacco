<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Savings extends MemberAffiliates
{
    protected $fillable = [
        'user_id', 'month','general','welfare','year'
    ];

    
}
