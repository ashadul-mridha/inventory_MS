<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name','email','phone','address','exprience','salary','vacation','city','nid_no','photo'
    ];
    protected $primarykey = 'id';
    
    use HasFactory;
}
