@extends('layouts._layout')
@section('page title')
    <h1>Lecturers</h1>
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم كاملاً</th>
            <th>البريد الالكتروني</th>
            <th>الملكية</th>
            <th>الصورة</th>
            <th>وقت الاضافة</th>
            <th>وقت التعديل</th>

        </tr>
        </thead>
        <tbody>
        @foreach($lecturers as $lecturer)
            <tr>
                <td>{{$lecturer->id}}</td>
                <td><a href="{{route('admin.users.edit',$lecturer->id)}}">{{$lecturer->name}}</a></td>
                <td>{{$lecturer->email}}</td>
                <td>{{$lecturer->role->name}}</td>
                <td><img height="50" src="/images/{{$lecturer->photo ?$lecturer->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td>{{$lecturer->created_at->diffForHumans()}}</td>
                <td>{{$lecturer->updated_at->diffForHumans()}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
