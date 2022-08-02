@extends('home.layouts.main')
@section('sprojectfilm')
    <div class="row">
        @foreach ($films as $film)
            <div class="col-6 col-lg-3 mt-3">
                <div class="card shadow h-100 bg-dark">
                    <a href="{{ url('/detail?slug=' . $film['slug']) }}" class="text-decoration-none text-dark">
                        <div class="position-absolute mt-2 ms-2">
                            <span class="bg-warning px-1 fs-5 fw-bold rounded">{{ $film['desc']['rating'] }}</span>
                        </div>
                        <h5 class="fs-4 position-absolute fixed-bottom text-center  fw-bold text-white">
                            {{ $film['title'] }} ({{ $film['desc']['tahun'] }})
                        </h5>
                        <img src="{{ $film['thumbnail'] }}" alt="" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
