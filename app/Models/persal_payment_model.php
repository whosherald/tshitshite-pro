<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persal_payment_model extends Model
{
    use HasFactory;
    protected $table = 'persal_payments';
    protected $primaryKey = 'pp_id';
    public $timestamps = false;
    protected $fillable = ['persal_emp',
                           'persal_num',
                           'persal_cell',
                           'persal_Paypoint',
                           'persal_holder',
                           'persal_premium',
                           'persal_address',
                           'persal_po_box',
                           'persal_town',
                           'persal_province',
                           'persal_code',
                           'persal_postal_code',

                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
