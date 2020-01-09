@extends('layouts._layout')

@section('page title')
    <h1>Edit Student</h1>
@stop

@section('content')

    <div class="row">


        <div class="col-sm-3">


            <img src="/images/{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


        </div>


        <div class="col-sm-6">

            @if(Session::has('msg'))
                <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif

            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'الاسم كاملاً:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'البريد الالكتروني') !!}
                {!! Form::email('email',null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'كلمة المرور:') !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'الصورة الشخصية:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'الصلاحية:') !!}
                {!! Form::select('role_id',$roles, null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::submit('تعديل',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف',['class'=>' btn btn-danger col-sm-3']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@stop
