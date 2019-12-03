<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id',
        'district',
        'amphoe',
        'province',
        'zipcode',
        'district_code',
        'amphoe_code',
        'province_code'
    ];

    public static function loadData($fileName){
        $cityRecords = loadCSV($fileName);
        foreach($cityRecords as $cityRecord){
            City::create($cityRecord);
        }
    }
}
