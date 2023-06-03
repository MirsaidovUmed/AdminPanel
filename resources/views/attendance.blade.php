@extends('layouts.master')

@section('title')
    Attendance
@endsection

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="datatable-buttons" class="table table-hover table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                            <thead class="thead-dark">
							<!-- Log on to codeastro.com for more projects! -->
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="2">Name</th>
                                        <th data-priority="3">LastPaid</th>
                                        <th data-priority="4">NextPaid</th>
                                        <th data-priority="6">Time In</th>
                                        <th data-priority="7">Time Out</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    


                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Log on to codeastro.com for more projects! -->
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection 


