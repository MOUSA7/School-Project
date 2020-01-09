@extends('layouts._layout')
@section('page title')
    <h1>المستخدمين</h1>
    @endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم كاملاً</th>
            <th>الملكية</th>
            <th>البريد الالكتروني</th>
            <th>الصوره</th>
            <th>وقت الاضافة</th>
            <th>وقت التعديل</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>

            <td>
                @if(auth()->user()->role_id == 1)
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>{{$user->role ?$user->role->name :'لايوجد'}}</option>
                        </select>
                    </div>
                   @else
                   Disable
                @endif

            </td>
{{--            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}--}}

{{--            <td>{{$user->role ?$user->role->name :'لايوجد'}}</td>--}}
            <td>{{$user->email}}</td>
            <td><img height="50" src="/images/{{$user->photo ?$user->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>


        </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-offset-5">
            {{$users->render()}}
        </div>
    </div>

@endsection
