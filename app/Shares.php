<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shares extends MemberAffiliates
{
    protected $fillable = [
        'number_of_shares', 'amount_paid', 'month','user_id','year'
    ];
}
