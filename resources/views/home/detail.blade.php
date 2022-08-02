@extends('home.layouts.main')
@section('sprojectfilm')
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="card h-100 mb-3 ">
                <iframe class="w-100 h-100 rounded" src="{{ $film['trailer'] }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6 text-white">
            <div class="d-flex">
                <h2>{{ $film['title'] }}</h2>
            </div>
            <span class="bg-warning px-2 rounded fs-6 text-dark fw-bold">
                {{ $film['rating'] }}</span>
            <div class="d-block mt-2">
                <span class="text-muted ">Sinopsis :</span>
                <p>
                    <span class="ms-5"></span> {{ $film['sinopsis'] }}
                </p>
            </div>
            <div class="d-block">
                <span class="text-muted">Download Subtitle :</span>
                <div class="d-block mt-2">
                    <a href="{{ $film['subtitle']['link_dua'] }}" target="_blank"
                        class="bg-primary text-decoration-none rounded px-1 py-1 text-white">Download
                        Subtitle</a>
                </div>
            </div>
            <div class="d-block mt-3">
                <span class="text-muted">Download Film Via Google Drive :</span>
                <div class="d-block mt-2">
                    @if ($film['link_download_film'] == 'tidak ada')
                        <button type="button" class="bg-primary rounded px-1 py-1 text-white mb-2">Download Belum
                            Tersedia</button>
                        <span>atau</span>
                        <a href="https://167.86.71.48/{{ request('slug') }}" target="_blank"
                            class="bg-primary text-decoration-none rounded px-1 py-1 text-white ">Kunjungi
                            Induk
                            Website</a>
                    @else
                        @foreach ($film['link_download_film'] as $link)
                            <a href="{{ $link['link_download'] }}" target="_blank"
                                class="bg-primary text-decoration-none rounded px-1 py-1 text-white ">Download</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
