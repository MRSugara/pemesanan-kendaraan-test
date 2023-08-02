@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Order</h1>
        </div>
        <div>
            <a href="{{ route('order.create') }}" class="btn btn-primary mb-3">Create new data</a>
            <a href="{{ route('ekspor') }}" class="btn btn-success mb-3">Export</a>

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
                                    @if ($data->status)
                                        <small class="text-success">Approved</small>
                                    @else
                                        <small class="text-danger">Unapproved</small>
                                    @endif
                                </td>


                                <td>

                                    <a href="{{ route('order.edit', ['id' => $data->id]) }}" class="badge bg-warning"><span
                                            data-feather="edit"></span></a>
                                    {{-- <form action="/dashboard/blogs/{{ $aplikasis->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure ?')"><span
                                            data-feather="trash-2"></span></button>
                                </form> --}}
                                    <a href="/order/delete/{{ $data->id }}" class="badge bg-danger"><span
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
