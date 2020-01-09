@extends('layouts._layout')

@section('page title')
    <h1>Details</h1>
@stop
@section('content')
    <div class="row">

        <div class="col-sm-5">

            {!! Form::open(['method'=>'POST','action'=>'StudentDetailsController@store','files'=>true]) !!}
            @csrf
            <input type="hidden" name="students_id" value="{{$students[1]->id}}" />

{{--            <input name="invisible" type="hidden" value="secret">--}}

            <div class="form-group">
                {!! Form::label('grade', 'المعدل') !!}
                {!! Form::text('grade',null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('semester', 'الفصل:') !!}
                {!! Form::select('semester',array(1 => 'First Semester', 2=> 'Second Semester')  , 1, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('subject_id', 'المادة:') !!}
                {!! Form::select('subject_id',[''=>'Choose options']+$subjects , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('exam ', 'الاختبار:') !!}
                {!! Form::select('exam ',array(1 => 'First Exam', 2=> 'Second Exam',3=>'Final') ,2, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

        </div>


        </div>

@endsection



