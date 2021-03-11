<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Salary extends Model
{
    protected $fillable =[
        'name','month','year','salary'
    ];

    protected $primarykey = 'id';

    public function employee(){
        return $this->belongaTo(Employee::class, 'emp_id','id');
    }

    use HasFactory;
}
