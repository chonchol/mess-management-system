@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
                  @include('admin.sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome <span class="pull-right" style="color: #5cb85c;"><?php echo "Today:". date("j F");?></span></div>

                      {!! Form::open(['url' => '/meal','method' => 'post','class' => 'form-horizontal']) !!}

                      @include ('meal.form')

                      {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
