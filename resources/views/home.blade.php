@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <?php $i=1; ?>
                            <thead>
                                <tr>
                                    <th>#</th>
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
                                   <td> {{ $i++ }} </td> 
                                   <td> {{'hello'}} </td> 
                                   <td> {{'hello'}} </td> 
                                   <td> {{'hello'}} </td> 
                                   <td> {{'hello'}} </td> 
                                   <td> {{'hello'}} </td> 
                                   <td> {{'hello'}} </td>
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
