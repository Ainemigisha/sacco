<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends MemberAffiliates
{
    protected $fillable = [
        'user_id', 'loans_amount', 'month','loans_interest','year'
    ];
}
