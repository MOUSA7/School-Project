@extends('layouts._layout')
@section('page title')
    <h1>الطلاب</h1>
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم كاملاً</th>
            <th>العمر</th>
            <th>العنوان</th>
            <th> __</th>
            <th> __</th>
            <th>الصف</th>
            <th>الصورة</th>
            <th>رقم هوية الاب</th>
            <th>وقت الاضافة</th>
            <th>وقت التعديل</th>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td><a href="{{route('students.edit',$student->id)}}">{{$student->FullName}}</a></td>
                <td>{{$student->age}}</td>
                <td>{{str_limit($student->address,10)}}</td>

                <td><a href="{{route('details.create',$student->id)}}">أضافة بيانات</a></td>
                <td><a href="{{route('student.show',$student->id)}}">عرض بيانات</a></td>
                <td>{{$student->classes['name']}}</td>
                <td><img height="50" src="/images/{{$student->photo ?$student->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td>{{$student->father_ID}}</td>
                <td>{{$student->created_at->diffForHumans()}}</td>
                <td>{{$student->updated_at->diffForHumans()}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-offset-5">
            {{$students->render()}}
        </div>
    </div>

{{--    <a class="btn btn-primary" href="{{route('details.show',$student->id)}}">عرض بيانات</a>--}}

@endsection
