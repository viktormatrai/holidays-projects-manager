<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table= 'projects';

    protected $fillable= ['project_name', 'project_description', 'project_deadline'];

    public function user(){
        $this->belongsToMany('App/User');
    }

    public function getDeadLine($project_deadline){
        return $project_deadline = Carbon::createFromFormat('Y-m-d', $project_deadline);
    }

}
