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
       return view('web.index',['data'=>$data]);
       
   }
}
