<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblemployee extends Model
{
    protected $table = 'tblemployee';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamp = true;
    protected $fillable = ["id","name","password","email","branch","created_at","updated_at"];
}
