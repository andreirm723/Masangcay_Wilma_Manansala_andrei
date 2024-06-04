<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'employee';
    protected $primarykey='id';
    protected $fillable =  ['fname','mname','lname'	]
}
