@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Order</h1>
        </div>
        {{-- <a href="{{ route('order.create') }}" class="btn btn-primary mb-3">Create new data</a> --}}
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
                            <th scope="col">Kendaraan</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Supir</th>
                            <th scope="col">Tanggal ambil</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (Auth::user()->divisi_id == 1)
                            @foreach ($orders as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->kendaraan->name }}</td>
                                    <td>{{ $data->divisi->name }}</td>
                                    <td>{{ $data->supir->name }}</td>
                                    <td>{{ $data->tanggal_ambil }}</td>
                                    <td>{{ $data->tanggal_ambil }}</td>
                                    <td>

                                        @if ($data->konfirmasi1)
                                            <small class="text-success">Approved</small>
                                        @else
                                            <small class="text-danger">Unapproved</small>
                                        @endif


                                    </td>
                                    <td>
                                        @if ($data->konfirmasi1)
                                            <form onsubmit="return confirm('Are you sure? ');"
                                                action="{{ route('order.reject', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                            </form>
                                        @else
                                            <form onsubmit="return confirm('Are you sure? ');"
                                                action="{{ route('order.approved', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($order as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->kendaraan->name }}</td>
                                    <td>{{ $data->divisi->name }}</td>
                                    <td>{{ $data->supir->name }}</td>
                                    <td>{{ $data->tanggal_ambil }}</td>
                                    <td>{{ $data->tanggal_ambil }}</td>
                                    <td>

                                        @if ($data->konfirmasi2)
                                            <small class="text-success">Approved</small>
                                        @else
                                            <small class="text-danger">Unapproved</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->konfirmasi2)
                                            <form onsubmit="return confirm('Are you sure? ');"
                                                action="{{ route('order.reject', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                            </form>
                                        @else
                                            <form onsubmit="return confirm('Are you sure? ');"
                                                action="{{ route('order.approved', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif



                    </tbody>
                </table>
            </div>
        </div>
    </main>>
@endsection
