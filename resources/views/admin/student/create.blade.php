@extends('layouts._layout')

@section('page title')
    <h1>إنشاء طالب</h1>
@stop
@section('content')
    <div class="row">


        <div class="col-sm-7">

            {!! Form::open(['method'=>'POST','action'=>'StudentsController@store','files'=>true]) !!}
            @csrf
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
                {!! Form::select('class_id',[''=>'Choose options'] +$classes, null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group form-check form-check-inline">
                <span class="caption-subject font-dark bold uppercase">Subject :</span>
            @foreach($subjects as $subject)
                    <input type="checkbox" value="{{$subject->id}}" name="subject_id[]" class="form-check-input">
                    <label class="form-check-label ">{{$subject->name}}</label>
                @endforeach
            </div>


            <div class="form-group">
                {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>


            {!! Form::close() !!}


        </div>
        <div class="col-sm-5">

            @include('includes/form_error')

        </div>

    </div>
@endsection



