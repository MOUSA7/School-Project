@extends('layouts._layout')

@section('page title')
    <h1>إنشاء مستخدم</h1>
    @stop
@section('content')
    <div class="row">

        @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
        @endif

        {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
        @csrf
        <div class="col-md-3">

                <img src="http://placehold.it/400x400" alt="" class="img-responsive img-rounded">

            <div class="form-group">
                {!! Form::label('photo_id', 'الصورة الشخصية:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

        </div>

        <div class="col-sm-8">

                {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
                @csrf
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
                    {!! Form::label('role_id', 'الصلاحية:') !!}
                    {!! Form::select('role_id',[''=>'Choose options']+$roles, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
                </div>

    {!! Form::close() !!}

        </div>
    </div>
@endsection



