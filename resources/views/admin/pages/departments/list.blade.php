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
            Add New Department 
        </button>
    </div>

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table id="myTable" class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $department->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{ $department->description }}</td>
                    <td>
                        <a value="{{ $department->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $department->id }}"
                            class="btn btn-success">Edit</a>
                    </td>
                    @include('admin.pages.departments.modal.edit', ['department' => $department])
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $department->id }}">Delete</a>
                    </td>
                    @include('admin.pages.departments.modal.delete', ['tdepartmenteam' => $department])
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.pages.departments.modal.create')

@endsection
