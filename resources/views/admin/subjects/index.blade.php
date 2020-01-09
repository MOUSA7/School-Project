@extends('layouts._layout')

@section('page title')
    <h1>إنشاء مادة</h1>
@stop
@section('content')
    <div class="row">


        <div class="col-sm-6">

            {!! Form::open(['method'=>'POST','action'=>'SubjectsController@store','files'=>true]) !!}
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="form-group">
                {!! Form::label('name', 'أسم المادة :') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('إنشاء',['class'=>' btn btn-primary col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-sm-6">
            <table class="table">
                <thead>
                <tr>
                    <th>أسم المادة</th>
                    <th>مدرس المادة</th>
                    <th>وقت الأضافة</th>
                    <th>وقت التعديل</th>

                </tr>
                </thead>
                <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td><a href="{{route('subjects.edit',$subject->id)}}">{{$subject->name}}</a></td>
                        <td>{{$subject->user_id}}</td>
                        <td>{{$subject->created_at->diffForHumans()}}</td>
                        <td>{{$subject->updated_at->diffForHumans()}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



