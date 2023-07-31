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
            Add New Price
        </button>
    </div>

    <div class="shadow-4 rounded-5 overflow-hidden">
        <table id="myTable" class="table align-middle mb-0 bg-white responsive">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Category Name</th>

                    <th scope="col">Default Option Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                  
                    <td>
                        @if($category->options->isNotEmpty())
                            {{ $category->options->first()->price }} $
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a value="{{ $category->id }}" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $category->id }}"
                            class="btn btn-success">Edit</a>
                    </td>
                    @include('admin.pages.price.modal.edit', ['category' => $category])
                    <td>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $category->id }}">Delete</a>
                    </td>
                    @include('admin.pages.price.modal.delete', ['category' => $category])
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.pages.price.modal.create')

@endsection
