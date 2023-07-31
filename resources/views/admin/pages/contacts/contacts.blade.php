@extends('admin.layouts.master')

@section('content')
<div class="container my-5">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif


    <div class="table-responsive ">
        <table id="myTable" class="table align-middle mb-0 bg-white mt-1">
            <thead class="bg-light">
                <tr>
                    <th scope="col">Sender Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                    <th scope="th">Reply</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td> {{ $contact->name }} </td>

                    <td>{{ $contact->email }}</td>
                    <td> {{ $contact->subject }}  </td>
                    @if($contact->is_checked == 1)
                    <td><span class="badge rounded-pill bg-success">resolved</span></td>
                    @else
                    <td><span class="badge bg-warning text-dark">pending</span></td>
                    @endif
                    <td> <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalShow{{ $contact->id }}">show message</a></td>
                    @include('admin.pages.contacts.modals.showMessage', ['contact' => $contact])
                    <td><a href="mailto:{{$contact->email}}" class="btn btn-success">Reply</a>  </td>
                    <td > <a href="" class="btn btn-danger" data-bs-toggle="modal"
                             data-bs-target="#ModalDelete{{ $contact->id }}">delete</a></td>
                    @include('admin.pages.contacts.modals.delete', ['contact' => $contact])
                </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>

</div>
@endsection
