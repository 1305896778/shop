<?php

namespace App\Http\Controllers\key;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class KeyController extends Controller
{
    public function key(){
        $private_key =file_get_contents("/tmp/openssl/rsa_private.pem");
        $pblic_key = file_get_contents("/tmp/openssl/rsa_public.pem");
        $arr=[
            'private_key'=>$private_key,
            'public_key'=>$pblic_key
        ];
        DB::table('key')->insert($arr);
    }
    //加密
    public function encode(){
        $arr="你好啊";
        $encryptData="";
        $privatekey=DB::table("key")->value('private_key');
        $info=encode($arr,$encryptData,$privatekey);
        echo $info;
    }

    public function decode(Request $request){
        $info=$request->input('str');
        $info=str_replace(" ","+",$info);
        $publickey=DB::table("key")->value('public_key');
        $go="";
        $arr=decode($info,$go,$publickey);
        return $arr;
    }
}
