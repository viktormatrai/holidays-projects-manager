<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FreeDay extends Model
{
    use SoftDeletes;

    protected $table = 'freedays';

    protected $fillable=[
      'first_day', 'last_day', 'user_id'
    ];

    public $holidays = ['*-01-01', '*-03-15', '*-12-25', '*-12-26', '*-10-23', '*-11-01'];

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function getFirstDay($first_day){
        return $first_day = Carbon::createFromFormat('Y-m-d', $first_day);
    }

    public function getLastDay($last_day){
        return Carbon::createFromFormat('Y-m-d', $last_day);
    }

    public function calculateHolidayReservedInWorkingDays($first_day, $last_day){
        $first_day = Carbon::parse($first_day);
        $last_day = Carbon::parse($last_day);
        $workingDaysReserved = $last_day->diffInWeekdays($first_day);
        return $workingDaysReserved;
    }

}
