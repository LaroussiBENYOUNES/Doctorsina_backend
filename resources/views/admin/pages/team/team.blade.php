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
            Add New Team Member
        </button>
    </div>

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table id="myTable" class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend_assets/img/'.$team->picture) }}"
                                alt="{{ $team->first_name }} {{ $team->last_name }}" style="width: 45px; height: 45px"
                                class="rounded-circle">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $team->first_name }} {{ $team->last_name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{ $team->job_name }}</td>
                    <td>
                        <a value="{{ $team->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $team->id }}"
                            class="btn btn-success">Edit</a>
                    </td>
                    @include('admin.pages.team.modal.edit', ['team' => $team])
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $team->id }}">Delete</a>
                    </td>
                    @include('admin.pages.team.modal.delete', ['team' => $team])
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.pages.team.modal.create')

@endsection
