@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kendaraan</h1>
        </div>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Create new data</a>
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
                            <th scope="col">Plat</th>
                            <th scope="col">BBM</th>

                            <th scope="col">Service</th>
                            <th scope="col">Riwayat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->plat }}</td>
                                <td>{{ $data->bbm }}</td>
                                <td>{{ $data->service }}</td>
                                <td>{{ $data->riwayat }}</td>
                                <td>
                                    @if ($data->status)
                                        <small class="text-success">Vailable</small>
                                    @else
                                        <small class="text-danger">Unvailable</small>
                                    @endif
                                </td>


                                <td>

                                    <a href="{{ route('kendaraan.edit', ['id' => $data->id]) }}"
                                        class="badge bg-warning"><span data-feather="edit"></span></a>
                                    {{-- <form action="/dashboard/blogs/{{ $aplikasis->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure ?')"><span
                                            data-feather="trash-2"></span></button>
                                </form> --}}
                                    <a href="/kendaraan/delete/{{ $data->id }}" class="badge bg-danger"><span
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
