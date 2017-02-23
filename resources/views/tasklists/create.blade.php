@extends('layouts.app')

@section('content')

<h1>タスクの新規作成のページ</h1>

　　{!!Form::model($tasklist,['route'=>'tasklists.store'])!!}
　　
　　　{!!Form::label('status','ステータス:') !!}
　　　{!!Form::text ('status')!!}　
　　
　　　{!!Form::label('content','ラベル:') !!}
　　　{!!Form::text ('content')!!}
　　　
　　　{!!Form::submit('送信')!!}
　　
　　{!!Form::close() !!}

@endsection