<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberRecords extends Model
{
    protected $fillable = [
        'user_id','date_created','general_savings','welfare_savings','general_fine','welfare_fine','loans_amount','loans_interest','number_of_shares','shares_amount_paid'
    ];

    public $timestamps = false;

    protected $dates = ['date_created'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
