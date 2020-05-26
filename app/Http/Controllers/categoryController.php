<?php

namespace App\Http\Controllers;
use App\category;
use App\product;
use App\User;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    { $data = category::all();
       return response()->json($data);
    }

    public function signup(Request $request)
    { $users = new User;

        $users->name = $request->name;
         $users->email = $request->email;
          $users->password = $request->password;
         
        $users->save();
         if($users)
        {
                    $finaldata['status']="Success";
                    $finaldata['reason']="record Added";
                    $finaldata['data']=$users;

        }
        else
        {
                 $finaldata['status']="Failure";
                 $finaldata['reason']="record doesn't exist";
                 $finaldata['data']=null;
        }
        return response()->json($finaldata);
    }

    public function login(Request $request)
    {
        $user = User::where(['email'=>$request->email,'password'=>$request->password])->first();
         if($user)
        {
                    $finaldata['status']="Success";
                    $finaldata['reason']="record fetched";
                    $finaldata['data']=$user;

        }
        else
        {
                 $finaldata['status']="Failure";
                 $finaldata['reason']="record doesn't exist";
                 $finaldata['data']=null;
        }
        return response()->json($finaldata);
    }

    public function prdbycat(Request $request)
    { $finaldata = array();
        $prd = product::where("catid",$request->id)->get();
        if($prd)
        {
                    $finaldata['status']="Success";
                    $finaldata['reason']="record fetched";
                    $finaldata['data']=$prd;

        }
        else
        {
                 $finaldata['status']="Failure";
                 $finaldata['reason']="record doesn't exist";
                 $finaldata['data']=null;
        }
        return response()->json($finaldata);
      
    }
}
