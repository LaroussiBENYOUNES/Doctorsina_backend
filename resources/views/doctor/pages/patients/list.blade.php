@extends('doctor.layouts.master')
@section('styles')
    <link href="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <!-- Content Head -->
    <!-- Container -->
    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
        <!-- Alert -->
        @if(session()->has('success'))
            <div class="alert alert-light alert-elevate" role="alert">
                <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                <div class="alert-text">
                    {{session()->get('success')}}
                </div>
            </div>
        @endif
        <!-- Portlet -->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon-users-1"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Patients List
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <a href="{{route('patients.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Add Patient
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="shadow-4 rounded-5 overflow-hidden">
                    <table class="table table-striped table-hover table-checkable kt_table_1" id="kt_table_1">
                        <thead class="thead-light">
                            <tr>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>National ID</th>
                                <th>Email</th>
                                <th>Mobile Num</th>
                                <th>Departments</th>
                                <th>Actions</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>
                                        @if(strpos($patient->picture,'users_pictures')!==false)
                                            <img src="{{asset('storage/'.$patient->picture)}}" width="50px" height="50px">
                                        @else
                                            <img src="{{asset('uploads/patients_pictures/'.$patient->picture)}}" width="50px" height="50px" class="rounded-circle">
                                        @endif
                                    </td>
                                    <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                                    <td>{{$patient->national_id}}</td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->mobile}}</td>
                                    <td>
                                        @foreach($patient->departments as $de)
                                            <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$de->name}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <span class="dropdown">
                                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                                <i class="la la-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{route('patient.edit',$patient->id)}}"><i class="fa fa-edit"></i>Edit Details</a>
                                             
                                            </div>
                                        </span>
                                    </td>
                                    <td>
                                      <form action="{{route('patient.destroy',$patient->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i
                                                class="fa fa-trash-alt"></i></button>
                                    </form>                       </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js" type="text/javascript"></script>
@endsection
