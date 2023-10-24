<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy_Details_Model extends Model
{
    protected $table = 'policy_details';
    protected $primaryKey = 'policy_id';
    public $timestamps = false;
    protected $fillable = ['policy_type',
                           'policy_status',
                           'policy_start_date',
                           'inception_date',
                           'premium',
                           'cover_amount',
                           'policy_cover_date',
                           'total_premium',
                           'underwritten_by',
                           'policy_number'];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
