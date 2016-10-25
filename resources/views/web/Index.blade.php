@extends('layout')

@section('content')
<div class="posts">
          <h1 class="content-subhead">索引域名</h1>
        
          
  <table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>#</th>
            <th>域名</th>
            <th>状态</th>
            <th>域名时间</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($data as $dm)
        <tr>
            <td>{{ $dm->id }}</td>
            <td>{{ $dm->domain }}</td>
            <td>{{ $dm->status }}</td>
            <td>{{ $dm->time }}</td>
        </tr>
    @endforeach
    </tbody>
</table>      

          
        </div>
@endsection