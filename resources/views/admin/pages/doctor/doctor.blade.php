@extends('admin.layouts.master')

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
            Add New Doctor Member
        </button>
    </div>

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table id="myTable" class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">National ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Num</th>
                    <th scope="col">Departments</th>
                    <th scope="col">Actions</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td>
                        @if(strpos($doctor->picture,'users_pictures') !== false)
                            <img src="{{ asset('storage/'.$doctor->picture) }}" width="50px" height="50px">
                        @else
                            <img src="{{ asset('uploads/doctors_pictures/'.$doctor->picture) }}" width="50px" height="50px" class="rounded-circle">
                        @endif
                    </td>
                    <td>
                        {{ $doctor->first_name }} {{ $doctor->last_name }}
                    </td>
                    <td>
                        {{ $doctor->national_id }}
                    </td>
                    <td>
                        {{ $doctor->email }}
                    </td>
                    <td>
                        {{ $doctor->mobile }}
                    </td>
                    <td>
                        @foreach($doctor->departments as $department)
                            {{ $department->name }}
                        @endforeach
                    </td>
                    <td>
                        <a value="{{ $doctor->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $doctor->id }}" class="btn btn-success">Edit</a>
                    </td>
                    @include('admin.pages.doctor.modal.edit', ['doctor' => $doctor])
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $doctor->id }}">Delete</a>
                    </td>
                    @include('admin.pages.doctor.modal.delete', ['doctor' => $doctor])
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.pages.doctor.modal.create')

@endsection
