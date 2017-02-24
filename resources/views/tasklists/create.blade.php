@extends('layouts.app')

@section('content')

<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-sm-offset-3 col-lg-6">

<h4>タスクの新規作成のページ</h4>

　　{!!Form::model($tasklist,['route'=>'tasklists.store'])!!}
　　
　　<div class="form-group">
　　　{!!Form::label('status','ステータス:') !!}
　　　{!!Form::text ('status',null, ['class' => 'form-control'])!!}　
　　</div>
　　
　　<div class="form-group">
　　　{!!Form::label('content','ラベル:') !!}
　　　{!!Form::text ('content',null, ['class' => 'form-control'])!!}
　　</div>
　　　{!!Form::submit('送信', ['class' => 'btn btn-default'])!!}
　　
　　{!!Form::close() !!}

</div>

@endsection