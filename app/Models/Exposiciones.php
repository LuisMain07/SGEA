<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposiciones extends Model
{
    use HasFactory;
    protected $table = 'tb_exposiciones';
    protected $primaryKey = 'id';
    public $timestamps = false;
}