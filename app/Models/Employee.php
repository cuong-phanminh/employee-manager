<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'email'
    ];

    public $timestamps = true;

    public function criterias()
    {
        return $this->belongsToMany(Criteria::class, 'employee_criterias', 'employee_id', 'criteria_id');
    }
}
