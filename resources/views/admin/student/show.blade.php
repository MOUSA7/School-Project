
@extends('layouts._layout')

@section('page title')
    <h1>Show</h1>
@stop
@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">المادة</th>
            <th scope="col">العلامة</th>
            <th scope="col">الفصل</th>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$sd->FullName}}</td>
            <td>{{$student->subject->name}}</td>
            <td>{{$student->grade }}</td>
            <td>{{$student->semester}}</td>
        </tr>
@endforeach
        </tbody>
    </table>

{{--                <div class="card col-sm-8 " style="width: 25rem; margin-right: 300px;">--}}
{{--                    <div class="card-header">--}}
{{--                        @foreach($students as $student)--}}
{{--                            {{$student->FullName}}--}}

{{--                        @endforeach--}}

{{--                </div>--}}
{{--                    @foreach($studentDetails as $details)--}}
{{--                <ul class="list-group list-group-flush">--}}
{{--                    <li class="list-group-item">Subject  : {{$details->subject_id}}</li>--}}
{{--                    <li class="list-group-item">Grade    : {{$details->grade}}</li>--}}
{{--                    <li class="list-group-item">Semester :{{$details->semester}}</li>--}}
{{--                </ul>--}}
{{--                        @endforeach--}}
{{--                 </div>--}}
@stop
