<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claims_model extends Model
{
    protected $table = 'claims';
    protected $primaryKey = 'claim_id';
    public $timestamps = false;
    protected $fillable = ['claim_claiming',
                           'claim_apply',
                           'claim_date',
                           'claim_number',
                           'claim_cause_death',
                           'claim_notes',
                           'claim_cover_amount',
                           'claim_apply_period',
                           'claim_documents',
                           'claim_choose_file',
                           'claim_certificate',
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
