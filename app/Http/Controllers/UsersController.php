<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Users;

class UsersController extends Controller
{
// Department Location
	public function fileupload(){

		return View('fileupload');
	}
	function importFiles(Request $request)
    {    
        $data=Excel::toArray(new UsersImport, $request->file('uploadfile'));  

        foreach($data AS $datas)
        {  
            $sno=0;
            $user_failed=[];
            foreach($datas AS $datas1)
            {
                if($sno=='0')
                {
                    $sno++;
                }
                else
                {
                   

                        if(!empty($datas1[1]) && !empty($datas1[2]) && !empty($datas1[3]) && !empty($datas1[4]) && !empty($datas1[5]))
                        {

                            Users::create([
								'firstname' => $datas1[1],
								'lastname' => $datas1[2],
								'email' => $datas1[3],
								'gender' => $datas1[4],
								'ip_address' => $datas1[5]
                            ]);

                        } else {
                            $user_failed['firstname']=$srmc_id;
                            $user_failed['lastname']=((!empty($datas1[3]))?$datas1[3]:'');
                            $user_failed['email']=((!empty($datas1[4]))?$datas1[4]:'');
                            $user_failed['gender']=((!empty($datas1[5]))?$datas1[5]:'');
                            $user_failed['ip_address']=((!empty($datas1[6]))?$datas1[6]:'');
                        }
                }
                $sno++;
            }
        }

        return redirect('/fileUpload');
    }

}
