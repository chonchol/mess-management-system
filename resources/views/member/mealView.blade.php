@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello, Your Monthly Meal is here: </div>
                    <div class="panel-body">
                        <a href="{{ url('/member/meal/add') }}" class="btn btn-primary pull-right btn-sm">Add Meal</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Breakfast</th>
                                        <th>Lunch</th>
                                        <th>Dinner</th>
                                        <th>Total Meal</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ere</td>
                                        <td>ere</td>
                                        <td>ere</td>
                                        <td>ere</td>
                                        <td>ere</td>
                                        <td>ere</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection