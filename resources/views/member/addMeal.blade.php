@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
                  @include('admin.sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>


                      {!! Form::open(['url' => '/member/meal/add', 'class' => 'form-horizontal']) !!}

                      @include ('member.form')

                      {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
