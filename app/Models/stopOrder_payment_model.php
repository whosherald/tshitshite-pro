<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stopOrder_payment_model extends Model
{
    use HasFactory;
    protected $table = 'stoporder_payment';
    protected $primaryKey = 'sp_id';
    public $timestamps = false;
    protected $fillable = ['spAcc_holder',
                           'spAcc_number',
                           'spBank_name',
                           'spAcc_type',
                           'spDebit_date',
                           'sp_status',
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
