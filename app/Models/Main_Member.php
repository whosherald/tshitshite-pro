<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Member extends Model
{
    protected $table = 'main_member';
    protected $primaryKey = 'mm_id';
    public $timestamps = false;
    protected $fillable = ['fullname',
                           'surname',
                           'title',
                           'id_number',
                           'initials',
                           'gender',
                           'date_of_birth',
                           'age',
                           'passport_number',
                           'marital_status',
                           'cellphone_number',
                           'citizenship',
                           'tellphone',
                           'email',
                           'street_address',
                           'po_box',
                           'city',
                           'province',
                           'postal_code'];

    public function salesRep()
    {
        return $this->belongsTo(Sale_Rep_Model::class, 'sales_rep_id');
    }
}
