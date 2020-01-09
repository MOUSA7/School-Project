{{--@extends('layouts._layout')--}}

{{--@section('page title')--}}
{{--    <h1>إنشاء ملاحظة</h1>--}}
{{--@stop--}}
{{--@section('content')--}}
{{--    <note-component></note-component>--}}
{{--@endsection--}}















@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <note-component></note-component>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@stop
