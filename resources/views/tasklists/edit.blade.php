@extends('layouts.app')

@section('content')

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-sm-offset-3 col-lg-6">


  <h4>id={{$tasklist->id}}のメッセージ編集ページ</h4>
  
  {!! Form::model($tasklist,['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
  <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content',null, ['class' => 'form-control']) !!}
  </div>      
        {!! Form::submit('更新', ['class' => 'btn btn-default'])!!}
  
  {!! Form::close() !!}
  
</div>

@endsection