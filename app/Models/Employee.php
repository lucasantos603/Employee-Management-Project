<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'city_id',
        'state_id',
        'department_id',
        'address',
        'zip_code',
        'birth_date',
        'date_hired'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
