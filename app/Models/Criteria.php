<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'criterias';
    protected $fillable = [
        'name',
        'point',
    ];

    public $timestamps = true;

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_criterias', 'employee_id', 'criteria_id');
    }
}
