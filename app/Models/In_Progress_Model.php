<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class In_Progress_Model extends Model
{
    protected $table = 'in_progress';
    protected $primaryKey = 'ip_id';
    public $timestamps = false;
    protected $fillable = ['main_member_id',
                            'form',
                        ];
}
