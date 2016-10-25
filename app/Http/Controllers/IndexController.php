<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Http\Requests;
use App\Domain;
use Rainwsy\Aliyunmail\Send\Single;
use Rainwsy\Aliyunmail\Auth;


class IndexController extends Controller
{
    public function index(){
        
        Log::info('Load IndexPage');
        
        $dm= new Domain;
        $data = $dm->all();
        return view('web.Index',['data'=>$data]);
        
    }
    public function request(){
        
        Log::info('Load Request Page');
        
        return view('web.Request');
    }
    public function save(Request $request){
        
        Log::info('Add New Domain:'.$request->domain);
        
        $dm = new Domain;
        $dm->domain = $request->domain;
        $dm->status  = '未监测';
        $dm->save();
        return view('web.Success');
    }
    public function check(){
        $domain = new Domain;
        $data=$domain->all();
        foreach ($data as $dm){
            if($this->getDomain($dm->domain) == '0'){
                $update = \App\Domain::find($dm->id);
                $update->status ='监测中,等待过期';
                $update->save();
            }else{
                $this->SendMail($dm->domain);
            }
        }
        echo 'Success';
        
    }
    // 发送邮件函数
    // @arg $domain 域名
    // @return restult 阿里云API接口返回值
    private function SendMail($domain){
        
        Log::info('Send Mail To Owner For Domain:'.$domain);
        
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
    // 域名查询接口 
    // @arg $domain
    // @return boolean 
    private function getDomain($domain){
        
        $domain = new \Phois\Whois\Whois($domain);
        
        if ($domain->isAvailable()) {
            return 1;
        } else {
            return 0;
        }
    }
}