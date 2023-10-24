<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compliance_Model extends Model
{
    protected $table = 'compliance';
    protected $primaryKey = 'comp_id';
    public $timestamps = false;
    protected $fillable = ['status',
                           'advice',
                           'wait_period',
                           'debit',
                           'premium',
                           'compliance_office',
                           'claims',
                           'reserved',
                           'forfeits',
                           'exclusion',
                           'migration',
                           'retrench',
                           'package',
                           'cash',
                           'no_claims',
                           'service',
                           'spouse',
                           'value_add',
                           'downgrade',
                           'assurance',
                           'curre_date',
                           'main_fullname',
                           'acceptTerm'

                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
