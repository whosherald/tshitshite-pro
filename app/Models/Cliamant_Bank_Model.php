<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliamant_Bank_Model extends Model
{
    protected $table = 'cliamant_bank';
    protected $primaryKey = 'claim_b_id';
    public $timestamps = false;
    protected $fillable = ['claim_b_bank',
                           'claim_b_branch',
                           'claim_b_code',
                           'claim_b_holder',
                           'claim_b_number',
                           'claim_b_type',
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
