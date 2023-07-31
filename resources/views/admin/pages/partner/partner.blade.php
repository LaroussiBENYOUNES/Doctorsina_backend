@extends('admin.layouts.master')
@section('content')

<div class="container my-5">
 <div class="d-flex justify-content-end mb-3">
        <a href="" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalCreate">
            <i class="fas fa-plus me-2"></i>
            Add New Partner
        </a>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
  

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($partners as $partner)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('frontend_assets/img/'.$partner->logo) }}" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $partner->partner_name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{ $partner->desciption }}</td>
                    <td>
                        <a class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $partner->id }}">Delete</a>
                    </td>
                    @include('admin.pages.partner.modal.delete', ['partner' => $partner])
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('admin.pages.partner.modal.create')


@endsection
