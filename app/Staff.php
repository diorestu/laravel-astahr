<?php

namespace App;


use App\Department;
use App\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'alamat', 'projects_id', 'dpt_id', 'pos_id', 'gender', 'lahir'
    ];

    protected $hidden = [];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id', 'id');
    }

    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'dpt_id');
    }

    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'pos_id');
    }
}
