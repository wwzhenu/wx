<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function (Request $request) {
    $parm=array(
        'wanglovechu',
        $request->get('timestamp'),
        $request->get('timestamp')
    );
    sort($parm,SORT_STRING);
    $parm=sha1(implode('',$parm));
    if ($parm==$request->get('signature')){
        echo $request->get('echostr');
    }else{
        echo '非微信访问';
    }
});
