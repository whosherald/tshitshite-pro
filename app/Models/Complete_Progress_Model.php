<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete_Progress_Model extends Model
{
    protected $table = 'completed_form';
    protected $primaryKey = 'cf_id';
    public $timestamps = false;
    protected $fillable = ['main_member_id',
                            'form',
                        ];
}
