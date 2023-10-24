<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_Rep_Model extends Model
{
    protected $table = 'sales_representative';
    protected $primaryKey = 'sales_rep_id';
    public $timestamps = false;
    protected $fillable = ['sales_rep_code',
                           'name',
                           'branch_name',
                           'email',
                           'policy_number',
                           'agent_number'];
}
