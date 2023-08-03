<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    protected $table = 'shift';
    protected $fillable = ['clientId', 'shiftDate', 'hours', 'expenses', 'km', 'note'];
    public $timestamps = false;


    
    use HasFactory;
}
