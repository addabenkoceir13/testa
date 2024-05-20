@extends('layouts.dashboard.app')
@section('content')
<section>
    <div class="container">
        <div class="card">
            @if ($errors->any())
                <div class="card-header">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            <div class="card-body">
                <form action="{{ route('dashboard.user.update', $user->id) }}" method="post" class="row g-3 ">
                    @csrf
                    @method('PUT')
                    <div class="col-md-4">
                        <label  class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"  value="{{ $user->name }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email"  value="{{ $user->email }}" required>
                    </div>
                    <div class="col-md-3">
                        <label  class="form-label">Status</label>
                        <select class="form-select" name="status"  required>
                            @if ($user->status == 'active')
                                <option selected value="1"><span class="badge badge-success">Active</span></option>
                                <option value="0"><span class="badge badge-danger">Inactive</span></option>
                            @else
                                <option value="1"><span class="badge badge-success">Active</span></option>
                                <option selected value="0"><span class="badge badge-danger">Inactive</span></option>
                            @endif
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Save Change</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection
