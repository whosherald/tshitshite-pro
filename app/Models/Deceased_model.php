<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deceased_model extends Model
{
    protected $table = 'deceased';
    protected $primaryKey = 'deceased_id';
    public $timestamps = false;
    protected $fillable = [
                            'deceased_name',
                            'deceased_gender' ,
                            'deceased_surname' ,
                            'deceased_id_number' ,
                            'deceased_date_of_birth' ,
                            'deceased_date_of_death' ,
                            'deceased_cause_of_death' ,
                            'deceased_code' ,
                            'deceased_funeral_date' ,
                            'deceased_funeral_time',
                            'deceased_collection',
                            'deceased_transport' ,
                            'deceased_cemetery' ,
                            'deceased_grave_no' ,
                        ];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
