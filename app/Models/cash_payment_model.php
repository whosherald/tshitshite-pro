<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cash_payment_model extends Model
{
    use HasFactory;
    protected $table = 'cash_payments';
    protected $primaryKey = 'cp_id';
    public $timestamps = false;
    protected $fillable = ['cp_fullname',
                           'cp_surname',
                           'cp_date',
                           'cp_address',
                           'cp_po_box',
                           'cp_town',
                           'cp_province',
                           'cp_postal_code',
                           'cp_address_code',
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
