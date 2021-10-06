<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examMarksModel extends Model
{
    use HasFactory;
    protected $table="exam_marks";
    protected $primaryKey="id";
    public $incrementing=true;
    protected $keyType="int";
    public $timestamps=false;
}
