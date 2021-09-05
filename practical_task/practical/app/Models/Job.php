<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'designation',
        'dob',
        'address1',
        'address2',
        'city',
        'state',
        'zipcode',
        'sscboard',
        'sscpassingyear',
        'sscpercentage',
        'hscboard',
        'hscpassingyear',
        'hscpercentage',
        'bachelorboard',
        'bachelorpassingyear',
        'bacheloruniversity',
        'bachelorpercentage',
        'masterboard',
        'masterpassingyear',
        'masteruniversity',
        'masterpercentage',
        'companyname1',
        'designation1',
        'fromdate1',
        'todate1',
        'companyname2',
        'designation2',
        'fromdate2',
        'todate2',
        'companyname3',
        'designation3',
        'fromdate3',
        'todate3',
        'languages',
        'technologies',
        'refname1',
        'refcontact1',
        'refrelation1',
        'refname2',
        'refcontact2',
        'refrelation2',
        'prelocation',
        'prenoticeperiod',
        'preectc',
        'precctc',
        'predepartment',
    ];
}
