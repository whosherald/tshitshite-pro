<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload_Model extends Model
{
    protected $table = 'uploads';
    protected $primaryKey = 'up_id';
    public $timestamps = false;
    protected $fillable = ['up_title',
                           'up_id_documents',
                           'up_veri_documents',
                           'up_documents',
                           'up_description',
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
