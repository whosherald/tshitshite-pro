<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary_Details_Model extends Model
{
    protected $table = 'beneficiary_details';
    protected $primaryKey = 'bd_id';
    public $timestamps = false;
    protected $fillable = ['bd_title',
                           'bd_relationship',
                           'bd_fullnames',
                           'bd_surname',
                           'bd_id_number',
                           'bd_date_of_birth',
                           'bd_cellphone',
                           'bd_email',
                           'bd_age',
                           'bd_initials',
                           'bd_gender',
                           'bd_work_tell',
                           'bd_percentage'];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
