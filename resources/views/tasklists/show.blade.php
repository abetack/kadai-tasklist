@extends('layouts.app')

@section('content')

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-sm-offset-3 col-lg-6">


<h4> id={{$tasklist->id}}のメッセージ詳細ページ</h4>

<table class="table">
    <tr>
        <th>ステータス</th>
        <th>タスク</th>
    </tr>
    <tr>
        <td>{{$tasklist->status}}</td>
        <td>{{$tasklist->content}}</td>
    </tr>
    
</table>


<p>{!! link_to_route('tasklists.edit', 'このメッセージ編集', ['id' => $tasklist->id]) !!}</p>

<p>
{!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
　{!! Form::submit('削除', ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}
</p>

</div>
@endsection