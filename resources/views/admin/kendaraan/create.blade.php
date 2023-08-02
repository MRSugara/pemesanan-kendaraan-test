@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create new data</h1>
            </div>

            <div class="col-lg-8 mb-5">
                <form action="{{ route('kendaraan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Kendaraan</label>
                        <input type="input" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" autofocus value="{{ old('name') }}" autocomplete="off" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="plat" class="form-label">Plat</label>
                        <input type="input" class="form-control @error('plat') is-invalid @enderror" id="plat"
                            name="plat" value="{{ old('plat') }}" required autocomplete="off">
                        @error('plat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="bbm" class="form-label">BBM</label>
                        <input type="input" class="form-control @error('bbm') is-invalid @enderror" id="bbm"
                            name="bbm" value="{{ old('link') }}" required autocomplete="off">
                        @error('bbm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <input type="date" class="form-control @error('service') is-invalid @enderror" id="service"
                            name="service" value="{{ old('link') }}" required autocomplete="off">
                        @error('service')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="riwayat" class="form-label">Riwayat</label>
                        <input type="input" class="form-control @error('riwayat') is-invalid @enderror" id="riwayat"
                            name="riwayat" value="{{ old('link') }}" autocomplete="off">
                        @error('riwayat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" aria-label="status" id="status"
                            name="status">
                            <option value="0" selected disabled>--Please choose an option--</option>
                            <option value="1" @if (old('status') == 1) selected @endif>Available</option>
                            <option value="0" @if (old('status') == 1) selected @endif>Unvaliable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Create data</button>
                    <a href="/kendaraan" class="m-2 text-decoration-none text-black-50 ml-5">Cancel</a>
                </form>
            </div>
        </div>
    </main>
@endsection
