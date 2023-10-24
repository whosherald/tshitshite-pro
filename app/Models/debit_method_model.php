<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debit_method_model extends Model
{
    use HasFactory;
    protected $table = 'payment_debit';
    protected $primaryKey = 'db_id';
    public $timestamps = false;
    protected $fillable = ['dpAcc_holder',
                           'dpaccount_number',
                           'dpbank_name',
                           'dpaccount_type',
                           'dpbranch_code',
                           'dpfrequency',
                           'dpdebit_day',
                           'dpcell_number',
                           'dpstreet_address',
                           'dppo_box',
                           'dptown',
                           'dppronvice',
                           'dppostal_code',];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
