<?php

namespace App\Imports;

use \App\Models\Users;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Users([
            'firstname' => ((!empty($row[1]))?$row[1]:''),
            'lastname' => ((!empty($row[2]))?$row[2]:''),
            'email' => ((!empty($row[3]))?$row[3]:''),
            'gender' => ((!empty($row[4]))?$row[4]:''),
            'ip_address' => ((!empty($row[5]))?$row[5]:''),
        ]);
    
    }
}
