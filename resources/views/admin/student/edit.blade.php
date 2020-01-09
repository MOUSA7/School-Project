@extends('layouts._layout')

@section('page title')
    <h1>تعديل طالب</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-sm-3">
            <img src="/images/{{$student->photo ?$student->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>


        <div class="col-sm-9">

                {!! Form::model($student,['method'=>'PATCH','action'=>['StudentsController@update',$student->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('FullName', 'الاسم كاملاً:') !!}
                {!! Form::text('FullName', null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('age', 'العمر') !!}
                {!! Form::text('age',null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('address', 'العنوان:') !!}
                {!! Form::text('address',null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('father_ID', 'رقم هوية الاب:') !!}
                {!! Form::text('father_ID', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('photo_id', 'الصورة الشخصية:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('class_id', 'الصف:') !!}
                {!! Form::select('class_id',$classes , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('تعديل',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['StudentsController@destroy',$student->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف',['class'=>' btn btn-danger col-sm-3']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection



