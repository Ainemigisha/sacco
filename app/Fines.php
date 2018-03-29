<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fines extends MemberAffiliates
{
    protected $fillable = [
        'user_id', 'general', 'month','welfare','year'
    ];
}
