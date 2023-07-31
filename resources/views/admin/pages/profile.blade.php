@extends('admin.layouts.master')

@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{ url('profileEdit', $user->id) }}" method="post">
        {{ csrf_field() }}
        @method('PUT')

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}">
            @if ($errors->has('first_name'))
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}">
            @if ($errors->has('last_name'))
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" placeholder="Enter your phone number">
            @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </form>
</div>

@endsection
