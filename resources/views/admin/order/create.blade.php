@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create new data</h1>
            </div>

            <div class="col-lg-8 mb-5">
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Pegawai</label>
                        <input type="input" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" autofocus value="{{ old('name') }}" autocomplete="off" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kendaraan" class="form-label">Kendaraan</label>
                        <select class="form-select" aria-label="kendaraan" id="kendaraan" name="kendaraan">
                            <option selected disabled>- Pilih Item -</option>
                            @foreach ($kendaraan as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select class="form-select" aria-label="divisi" id="divisi" name="divisi">
                            <option selected disabled>- Pilih Item -</option>
                            @foreach ($divisi as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="supir" class="form-label">Supir</label>
                        <select class="form-select" aria-label="supir" id="supir" name="supir">
                            <option selected disabled>- Pilih Item -</option>
                            @foreach ($supir as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tglambil" class="form-label">Tanggal ambil</label>
                        <input type="date" class="form-control @error('tglambil') is-invalid @enderror" id="tglambil"
                            name="tglambil" required autocomplete="off">
                        @error('tglambil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tglkembali" class="form-label">Tanggal kembali</label>
                        <input type="date" class="form-control @error('tglkembali') is-invalid @enderror" id="tglkembali"
                            name="tglkembali" required autocomplete="off">
                        @error('tglkembali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Create data</button>
                    <a href="/order" class="m-2 text-decoration-none text-black-50 ml-5">Cancel</a>
                </form>
            </div>
        </div>
    </main>
@endsection
