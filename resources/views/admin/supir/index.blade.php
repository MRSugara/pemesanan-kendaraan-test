@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kendaraan</h1>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('supir.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama supir</label>
                        <input type="input" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" autofocus value="{{ old('name') }}" autocomplete="off" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Create data</button>
                </form>
            </div>
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
                            <th scope="col">status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supir as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    @if ($data->status)
                                        <small class="text-success">Vailable</small>
                                    @else
                                        <small class="text-danger">Unvailable</small>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('supir.edit', ['id' => $data->id]) }}" class="badge bg-warning"><span
                                            data-feather="edit"></span></a>
                                    {{-- <form action="/dashboard/blogs/{{ $aplikasis->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Are you sure ?')"><span
                                            data-feather="trash-2"></span></button>
                                </form> --}}
                                    <a href="/supir/delete/{{ $data->id }}" class="badge bg-danger"><span
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
