<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    use HasFactory;
    protected $table = 'tb_obras';
    protected $primaryKey = 'obra_id';
    public $timestamps = false;
}