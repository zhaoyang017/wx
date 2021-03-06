<?php

namespace App\Http\Controllers\Jomoo;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class JomooController extends Controller
{
    public function index(Request $request)
    {
        $validate=Validator::make($request->all(), [
            'code' => 'required'
        ]);
        if ($validate->fails()) {
            return 'false';
        }
        $code = $request->code;
        $code1 = Redis::get('code1');
        $code2 = Redis::get('code2');
        $code3 = Redis::get('code3');

        if ($code == $code1){
            Redis::set('code1', $code,'ex','180');
            return 'true';
        }elseif($code == $code2){
            Redis::set('code2', $code,'ex','180');
            return 'true';
        }elseif($code == $code3){
            Redis::set('code3', $code,'ex','180');
            return 'true';
        }else{
            return 'false';
        }
    }

    public function destroy(Request $request)
    {
        $validate=Validator::make($request->all(), [
            'code' => 'required'
        ]);
        if ($validate->fails()) {
            return 'false';
        }
        $code = $request->code;
        $code1 = Redis::get('code1');
        $code2 = Redis::get('code2');
        $code3 = Redis::get('code3');

        if ($code == $code1){
            Redis::del('code1');
            return 'true';
        }elseif($code == $code2){
            Redis::del('code2');
            return 'true';
        }elseif($code == $code3){
            Redis::del('code3');
            return 'true';
        }else{
            return 'false';
        }

    }
}
