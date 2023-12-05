@extends('admin.partials.main')
@section('admincontainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        @foreach ($order as $data)
            {!! $chart->container() !!}
        @endforeach

        {{-- <div class="card mb-4">
            <div class="card-body">

                <table class="table table-striped table-sm" id="">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5" style="text-align: center;">asdfasdf</th>
                        <tr>
                            <th scope="col">Bulan</th>
                            <th scope="col">Name</th>
                            <th scope="col">Kendaraan</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Supir</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $combined = array_map(null, $bulan, $months);
                        @endphp
                        @foreach ($combined as $item)
                            @php
                                [$value1, $value2] = $item;
                            @endphp
                            <tr>
                                <td>{{ $value1 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}


    </main>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
