@extends('layouts.app')

@section('content')

　　{!!Form::model($tasklist,['route'=>'tasklists.store'])!!}
　　
　　　{!!Form::label('content','ラベル:') !!}
　　　{!!Form::text ('content')!!}
　　　
　　　{!!Form::submit('送信')!!}
　　
　　{!!Form::close() !!}

@endsection