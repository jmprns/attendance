@extends('layouts.app')

{{-- HTML Title --}}
@section('html-title')
Dashboard
@endsection

{{-- Top Css --}}
@section('css-top')
<!-- DataTables -->
<link href="{{ asset('vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('vendor/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('vendor/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Bottom Css --}}
@section('css-bot')

@endsection

{{-- Page Title --}}
@section('page-title')
Dashboard
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="active">
	Dashboard
</li>
@endsection

{{-- Main Content --}}
@section('main-content')
	<div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-three">
                                    <div class="bg-icon pull-left">
                                        <i class="ti-user"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Students</p>
                                        <h2 class="m-b-10"><span data-plugin="counterup">{{ $count['student'] }}</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-three">
                                    <div class="bg-icon pull-left">
                                        <i class="ti-comment"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Presents</p>
                                        <h2 class="m-b-10"><span data-plugin="counterup">{{ $count['present'] }}</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-three">
                                    <div class="bg-icon pull-left">
                                        <i class="ti-signal"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Events</p>
                                        <h2 class="m-b-10"><span data-plugin="counterup">{{ $count['events'] }}</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-three">
                                    <div class="bg-icon pull-left">
                                        <i class="ti-time"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-success m-t-5 text-uppercase font-600 font-secondary">{{ strtoupper(date('l', time())) }}</p>
                                        <h2 class="m-b-10">{{ date('H', time()) }}:{{ date('i', time()) }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Attendance today.</b></h4>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attendance as $att)
                                        <tr>
                                            <td>{{ date('Y-m-d h:i:s A', $att->timestamp) }}</td>
                                            <td>{{ $att->student->lname }}, {{ $att->student->fname }} {{ $att->student->mname }}.</td>
                                            <td>{{ $att->student->year->department->name }} - {{ $att->student->year->name }}</td>
                                            <td>@if($att->action == 0) TIME IN @else TIME OUT @endif</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection

{{-- Top Page Js --}}
@section('js-top')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap.js') }}"></script>
@endsection

{{-- Bottom Js Script --}}
@section('js-bot')
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
    });
</script>
@endsection