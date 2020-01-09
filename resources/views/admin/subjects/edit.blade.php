@extends('layouts._layout')

@section('page title')
    <h1>إنشاء مادة</h1>
@stop
@section('content')
    <div class="row">


        <div class="col-sm-6">

            {!! Form::model($subject,['method'=>'PATCH','action'=>['SubjectsController@update',$subject->id],'files'=>true]) !!}
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="form-group">
                {!! Form::label('name', 'أسم المادة :') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE','action'=>['SubjectsController@destroy',$subject->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف',['class'=>' btn btn-danger col-sm-3']) !!}
            </div>
            {!! Form::close() !!}

        </div>
     </div>
@endsection
