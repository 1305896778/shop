<?php

namespace App\Http\Controllers\register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request){

        $uname=$request->input('uname');
        $pwd=$request->input('pwd');
        if($uname=='zhangsan'&&$pwd==111111){
            return json_encode([
                'code'=>1,
                'msg'=>'成功'
            ]);
        }else{
            return json_encode([
                'code'=>0,
                'msg'=>'失败'
            ]);
        }
    }
}
