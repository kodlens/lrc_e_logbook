<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $table = 'franchises';
    protected $primaryKey = 'franchise_id';

    protected $fillable = ['franchise_reference', 'date_acquired', 'operator_name',
        'province', 'city', 'barangay', 'street', 'vehicle_reference', 'chassis_reference',
        'make', 'plate_no', 'route_operation', 'cab_no', 'remarks', 'sysuser'];


}

