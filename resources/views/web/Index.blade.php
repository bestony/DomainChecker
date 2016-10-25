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
            <th>创建时间</th>
            <th>上次监测时间</th>
        </tr>
    </thead>

    <tbody>
    
   
    @if (count($data) < 1)
        <tr>
            <td colspan=4>没有域名</td>
        </tr>
    @else
        @foreach ($data as $dm)
            <tr>
                <td>{{ $dm->id }}</td>
                <td>{{ $dm->domain }}</td>
                <td>{{ $dm->status }}</td>
                <td>{{ $dm->created_at }}</td>
                <td>{{ $dm->updated_at }}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>      

          
        </div>
@endsection