@extends('layouts._layout')

@section('page title')
    <h1>Create Student</h1>
@stop

@extends('layouts._layout')
@section('content')
    <div class="row">

        @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
        @endif

        <div class="col-sm-6">

            {!! Form::open(['method'=>'POST','action'=>'UsersController@store','files'=>true]) !!}
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
                {!! Form::label('photo_id', 'الصورة الشخصية:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'الصلاحية:') !!}
                {!! Form::select('role_id',[''=>'Choose options']+$roles, null, ['class'=>'form-control'])!!}
            </div>
            @foreach($users as $user)
                @if($user->Role->id == 3)
                    <div class="form-group">
                        {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
                    </div>
                @endif
            @endforeach

            {!! Form::close() !!}

        </div>
        <div class="col-sm-6">
            @foreach($users as $user)
                @if($user->Role->id == 1)
                    {!! Form::open(['method'=>'post','action'=>'StudentsController@store','files'=>true]) !!}
                    @csrf
                    <div class="form-group">
                        {!! Form::label('age', 'العمر:') !!}
                        {!! Form::text('age', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'العنوان:') !!}
                        {!! Form::text('address', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('father_ID', 'رقم الهوية:') !!}
                        {!! Form::text('father_ID', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
                    </div>
                    {!! Form::close() !!}
                @endif
            @endforeach
        </div>


    </div>
@endsection



