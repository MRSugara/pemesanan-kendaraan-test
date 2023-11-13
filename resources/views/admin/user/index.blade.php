@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User</h1>
        </div>
        <div class="card mb-4">
            <div class="card-body">

                <table class="table table-striped table-sm" id="dataTable">
                    {{-- @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Role</th>
                            {{-- <th scope="col">Password</th> --}}
                            <th scope="col">Persetujuan</th>
                            <th scope="col">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->divisi->name }}</td>

                                @if ($data->role_id == 1)
                                    <td> Admin</td>
                                @else
                                    <td> Kepala bagian</td>
                                @endif
                                {{-- <td>{{ Illuminate\Support\Facades\Hash::needsRehash($data->password) }}</td> --}}

                                <td>
                                    @if ($data->approve)
                                        <small class="text-success">Approved</small>
                                    @else
                                        <small class="text-danger">Unapproved</small>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center ">
                                    @if ($data->approve)
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('user.reject', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Reject</button>
                                        </form>
                                    @else
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('user.approve', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-success"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Approve</button>
                                        </form>
                                    @endif
                                    <a href="/user/delete/{{ $data->id }}" class="badge bg-danger mx-2"><span
                                            data-feather="trash-2"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>>
@endsection
