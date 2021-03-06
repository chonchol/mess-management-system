@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello <span style="color: #5cb85c;font-weight:bold">{{ Auth::user()->name }}</span>, Your Monthly Meal is here: </div>
                    <div class="panel-body">
                        <a href="{{ url('/meal/add') }}" class="btn btn-primary pull-right btn-sm">Add Meal</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Breakfast</th>
                                        <th>Lunch</th>
                                        <th>Dinner</th>
                                        <th>Extra Meal</th>
                                        <th>Total Meal</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($foods as $value)
                                    <tr>
                                       <td> {{date("j. m. y", strtotime($value->created_at))}} </td>
                                       <td> {{$value->total_breakfast}} </td> 
                                       <td> {{$value->total_lunch}} </td> 
                                       <td> {{$value->total_dinner}} </td> 
                                       <td> {{$value->total_extra_meal}} </td> 
                                       <td> {{$value->total_meal}} </td> 
                                       <td> {{date("h:i:s", strtotime($value->created_at))}} </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
