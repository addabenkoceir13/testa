@extends('layouts.dashboard.app')

@section('content')
<section class="container">
    <h1>Hello Admin {{ Auth::user()->name }}</h1>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                            @if ($user->status == 'active')
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                    </td>
                    <td>
                        <a href="{{ route('dashboard.user.edit', $user->id) }}" class="btn btn-outline-success">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a  class="btn btn-outline-danger" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#deleteUserModal{{ $user->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @include('dashboard.delete')
            @endforeach
        </tbody>
    </table>
</section>

@endsection
