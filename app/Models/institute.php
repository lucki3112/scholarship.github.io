<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    use HasFactory;
    protected $table="institutes";
    protected $primary_key="id";
}
