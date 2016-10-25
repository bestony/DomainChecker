@extends('layout') @section('content')
<div class="posts">
  <h1 class="content-subhead">新增域名</h1> 
  {!! Form::open(array('url'=>'/request','method'=>'POST','class'=>'pure-form')) !!}
  <fieldset class="pure-group">
    <legend>需要输入根域名，如qq.com，输入二级域名可能会出现误报情况！</legend>
    <input class="pure-input-1" type="text" placeholder="填写您要监控的域名" name="domain">
  </fieldset>
  <button type="submit" class="pure-button pure-input-1-4 pure-button-primary">加入域名</button>

  {!! Form::close() !!}



</div>
@endsection