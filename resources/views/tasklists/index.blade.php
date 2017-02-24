@extends('layouts.app')

@section('content')

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


@endsection