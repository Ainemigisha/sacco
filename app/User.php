<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','real_password','joinDate'
    ];

    protected $dates = ['joinDate'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function member_records(){
        return $this->hasMany(MemberRecords::class);
    }

    public function savings()
    {
        return $this->hasMany(Savings::class);
    }

    public function loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function shares()
    {
        return $this->hasMany(Shares::class);
    }

    public function fines()
    {
        return $this->hasMany(Fines::class);
    }
}
