@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create new data</h1>
            </div>

            <div class="col-lg-8 mb-5">
                <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Kendaraan</label>
                        <input type="input" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" autofocus autocomplete="off" required value="{{ $kendaraan->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="plat" class="form-label">Plat</label>
                        <input type="input" class="form-control @error('plat') is-invalid @enderror" id="plat"
                            name="plat" required autocomplete="off" value="{{ $kendaraan->plat }}">
                        @error('plat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="bbm" class="form-label">BBM</label>
                        <input type="input" class="form-control @error('bbm') is-invalid @enderror" id="bbm"
                            name="bbm" required autocomplete="off" value="{{ $kendaraan->bbm }}">
                        @error('bbm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <input type="date" class="form-control @error('service') is-invalid @enderror" id="service"
                            name="service" required autocomplete="off" value="{{ $kendaraan->service }}">
                        @error('service')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="riwayat" class="form-label">Riwayat</label>
                        <input type="input" class="form-control @error('riwayat') is-invalid @enderror" id="riwayat"
                            name="riwayat" autocomplete="off" value="{{ $kendaraan->riwayat }}">
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

                            <option value="1" @if (old('status') == $kendaraan->status) selected @endif>Available</option>
                            <option value="0" @if (old('status') == $kendaraan->status) selected @endif>Unvailable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Update data</button>
                    <a href="/kendaraan" class="m-2 text-decoration-none text-black-50 ml-5">Cancel</a>
                </form>
            </div>
        </div>
    </main>
@endsection
