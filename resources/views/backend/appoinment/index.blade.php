@extends('backend.layouts.app')



@section('css')

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<!-- Data table CSS -->
<link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Custom CSS -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

@endsection




@section('content')

<div class="container-fluid">
    <!-- Title -->
    <div class="row heading-bg bg-green">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Export</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>table</span></a></li>
                <li class="active"><span>Export</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
@if('msg')
<div class="alert alert-success">{{session('msg')}}</div>
@endif
                        <h6 class="panel-title txt-dark">Export</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover display  pb-30">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Patient Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Doctor Name</th>
                                            <th>Date</th>
                                            <th>Remarks</th>
                                            <th>Status</th>
                                            <th style="width: 30%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Patient Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Doctor Name</th>
                                            <th>Date</th>
                                            <th>Remarks</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($appoinments as $appoinment)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$appoinment->name}}</td>
                                            <td>{{$appoinment->email}}</td>
                                            <td>{{$appoinment->phone}}</td>
                                            <td>{{$appoinment->doctor->name}}</td>
                                            <td>{{$appoinment->date}}</td>
                                            <td>{{$appoinment->remarks}}</td>
                                            <td><a href="{{route('changeStatus',$appoinment->id)}}" class="{{$appoinment->status =='confirmed' ? 'btn btn-success': 'btn btn-danger'}}">{{$appoinment->status}} </a></td>
                                            <td style="width: 30%;">



<form action="{{route('appoinment.destroy', $appoinment->id)}}" method="post">
<a href="{{route('appoinment.show', $appoinment->id)}}" class="btn btn-success"> View</a>
<a href="{{route('appoinment.edit', $appoinment->id)}}" class="btn btn-info"> Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" name="submit">Delete</button>
</form>
                                                </td>

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
    </div>
    <!-- /Row -->
</div>



@endsection

@section('js')

<!-- jQuery -->
<script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Data table JavaScript -->
<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dist/js/export-table-data.js')}}"></script>
<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>
@endsection
