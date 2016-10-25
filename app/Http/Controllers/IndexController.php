<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain;

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
       $dm->time = time();
       $dm->status  = '未监测';
       $dm->save();
       return view('web.Success');
   }
}
