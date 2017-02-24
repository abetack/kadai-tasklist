@extends('layouts.app')

@section('content')

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-sm-offset-3 col-lg-6">


  <h4>タスク一覧</h4>

　@if(count($tasklists) > 0 )
  
  <table class="table table-bordered table-hover table-condensed">
      
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">ステータス</th>
      <th class="text-center">タスク</th>
    </tr>
   
    @foreach($tasklists as $tasklist) 
    <tr>
      <td class="text-center">{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!} </td>
      <td class="text-center">{{ $tasklist->status }} </td>
      <td class="text-center">{{ $tasklist->content }} </td>
    </tr>
    @endforeach
　
　</table>
　
　@endif

</div>
@endsection