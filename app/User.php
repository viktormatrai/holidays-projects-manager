<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'free_days'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setUsedFreeDays(){
        $daysUsed = FreeDay::calculateHolidayReservedInWorkingDays();
        $this -> attributes['used_free_days'] = $daysUsed;
    }

    public function calculateRemainingFreeDays($freedays, $daysUsed){
        $remainingFreeDays = $freedays-$daysUsed;
        return $remainingFreeDays;
    }

    public function setRemainingFreeDays(){
        $freeDays = User::where('id', id())->get('free_days');
        $daysUsed = User::where('id', id())->get('used_free_days');
        $this-> attributes['remaining_free_days'] = User::calculateRemainingFreeDays($freeDays, $daysUsed);
    }



}
