<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'contact_person',
        'ident_no',
        'designation',
        'mobile_no',
        'alt_phone',
        'email',
        'status',
        'district',
        'thana',
        'userType',
        'area',
        'address',
        'conectionType',
        'mikrotikName',
        'billingType',
        'idNo',
        'package',
        'mikroTikRadius',
        'startDate',
        'password',
        'expireDate',
        'monthlyBill',
        'lineCharge',
        'discount',
        'total',
        'fiberMeter',
        'fiberCode',
        'rjMeter',
        'boxNo',
        'device',
        'deviceMac',
        'deviceWarrenty',
        'deposit',
        'router',
        'routerMac',
        'routerWarranty',
        'sellingPrice',
        'reference',
        'reseller',
        'note',
        'lineMan',
        'securityDeposit',
        'locationPoint'
    ];
}
