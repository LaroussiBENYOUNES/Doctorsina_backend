@extends('doctor.layouts.master')

@section('content')
<div class="container my-5">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalCreate">
            <i class="fas fa-plus me-2"></i>
            Add New Patient 
        </button>
    </div>

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table id="myTable" class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Picture</th>
                                <th>Name</th>
                                <th>National ID</th>
                                <th>Email</th>
                                <th>Phone Number</th>
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
                                    <td>{{$patient->phone_number}}</td>
                                    <td>
                                        @foreach($patient->departments as $de)
                                            <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{{$de->name}}</span>
                                        @endforeach
                                    </td>
                                     <td>
                        <a value="{{ $patient->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $patient->id }}"
                            class="btn btn-success">Edit</a>
                    </td>
                    @include('doctor.pages.patients.modal.edit', ['patient' => $patient])
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $patient->id }}">Delete</a>
                    </td>
                    @include('doctor.pages.patients.modal.delete', ['patient' => $patient])
                                </tr>
                            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('doctor.pages.patients.modal.create')

@endsection
  
