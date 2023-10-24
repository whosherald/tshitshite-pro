<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capturing_Extended_Member_Model extends Model
{
    protected $table = 'extended_member';
    protected $primaryKey = 'em_id';
    public $timestamps = false;
    protected $fillable = ['emtitle',
                            'emrelationship',
                            'emfullname',
                            'emsurname',
                            'emid_number',
                            'emdate_of_birth',
                            'emcellphone',
                            'ememail',
                            'eminitials',
                            'emgender',
                            'emcover_amount',
                            'empolicy_type',
                            'emadd_premium',
                            'emtotal_premium'];

    public function mainMember()
    {
        return $this->belongsTo(Main_Member::class, 'main_member_id');
    }
}
