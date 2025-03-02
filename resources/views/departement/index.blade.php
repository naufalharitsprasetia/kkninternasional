@extends('layout.main')

@section('content')
{{-- DEPARTEMENT index --}}
<div class="departement-section text-primary">
    <div class="departement max-w-7xl mx-auto py-16 text-center ">
        <h1 class="text-5xl font-bold text-center">Kelompok Kami</h1>
        <div class="divisons-group mt-5 font-poppins mx-12 md:mx-28">
            @foreach ($divisions as $division)
            {{-- Per Divisi --}}
            <div class="divisi mb-8">
                <h2 class="text-left mb-2 text-lg font-semibold">
                    @php
                    // Pisahkan kata pertama
                    $words = explode(' ', $division->nama);
                    $firstWord = $words[0];
                    $remainingWords = implode(' ', array_slice($words, 1));
                    @endphp
                    <span class="text-third">{{ $loop->iteration }}. {{ $firstWord }}</span> {{ $remainingWords }}
                </h2>
                <div class="flex flex-wrap gap-4 ">
                    @foreach ($division->departements as $departement)
                    <a href="/departement/{{ $departement->id }}"
                        class="rounded-xl bg-primary text-white font-semibold px-8 py-4">{{ $departement->nama
                        }}</a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
