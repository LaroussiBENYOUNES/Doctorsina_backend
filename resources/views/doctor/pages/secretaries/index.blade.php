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
            Add New Secretary 
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
                                <th>Mobile Num</th>
                                <th>Actions</th>
                                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                        @foreach($secretaries as $secretary)
                                <tr>
                                    <td>
                                        @if(strpos($secretary->picture,'users_pictures')!==false)
                                            <img src="{{asset('storage/'.$secretary->picture)}}" width="50px" height="50px">
                                        @else
                                            <img src="{{asset('uploads/patients_pictures/'.$secretary->picture)}}" width="50px" height="50px" class="rounded-circle">
                                        @endif
                                    </td>
                                    <td>{{$secretary->first_name}} {{$secretary->last_name}}</td>
                                    <td>{{$secretary->national_id}}</td>
                                    <td>{{$secretary->email}}</td>
                                    <td>{{$secretary->mobile}}</td>
                                  
                                     <td>
                        <a value="{{ $secretary->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $secretary->id }}"
                            class="btn btn-success">Edit</a>
                    </td>
                    {{-- @include('doctor.pages.patients.modal.edit', ['secretary' => $secretary]) --}}
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $secretary->id }}">Delete</a>
                    </td>
                    @include('doctor.pages.secretaries.modal.delete', ['secretary' => $secretary])
                                </tr>
                            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('doctor.pages.secretaries.modal.create')

@endsection
