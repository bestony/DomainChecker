<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain;
use Rainwsy\Aliyunmail\Send\Single;
use Rainwsy\Aliyunmail\Auth;

class IndexController extends Controller
{
    public function index(){
        $dm= new Domain;
        $data = $dm->all();
        return view('web.Index',['data'=>$data]);
        
    }
    public function request(){
        return view('web.Request');
    }
    public function save(Request $request){
        $dm = new Domain;
        $dm->domain = $request->domain;
        $dm->status  = '未监测';
        $dm->save();
        return view('web.Success');
    }
    public function check(){
        $res = $this->SendMail('www.ixiqin.com');
        var_dump($res);
    }
    private function SendMail($domain){
        
        $auth = Auth::config(getenv('DM_AK'), getenv('DM_SK'));
        $mail = new Single();
        $mail->setAccountName(getenv('DM_SENDER'));
        $mail->setFromAlias(getenv('DM_SENDER_NAME'));
        $mail->setReplyToAddress('true');
        $mail->setAddressType('1');
        $mail->setToAddress(getenv('OWNERMAIL'));
        
        $mail->setSubject('即将到期:'.$domain);
        $mail->setHtmlBody('即将到期:'.$domain);
        
        $send = $mail->send();
        
        return $send;
    }
}