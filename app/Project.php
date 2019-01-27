<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table= 'projects';

    protected $fillable= ['project name', 'project_description', 'project_deadline'];


}
