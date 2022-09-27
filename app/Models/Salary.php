<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'range'
    ];

    public function applications ()
    {
        return $this->hasMany(Application::class);
    }

}