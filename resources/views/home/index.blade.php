@extends('layout.main')

@section('content')

{{-- Hero Section --}}
<div class="min-h-svh flex justify-center items-center">

    {{-- main Content --}}
    <div class="text-center flex flex-col justify-center items-center text-dema p-3 md:p-8 z-20">
        <div class="flex my-4">
            <img class="w-44 md:w-52" src="/img/logokkn.png" alt="">
        </div>
        {{-- <span class="mt-6 uppercase text-sm">Website Resmi</span> --}}
        <h1 class="mt-3 md:mt-6 font-jakarta font-[800] uppercase text-3xl md:text-5xl"
            style="text-shadow: 0px 0px 12px rgb(240 133 25);;letter-spacing: 5.76px;line-height: 96.965%;">
            KKN INTERNASIONAL
            <br>Malaysia A
        </h1>
    </div>
</div>

{{-- Kabinet Section --}}
<div class="kabinet-section bg-cover" style="background-image: url('/img/tulisanhadisatya.png')">
    <div class="kabinet flex flex-col max-w-7xl mx-auto pt-16 text-center justify-center">
        <div class="">
            <h1 class="font-jakarta text-5xl font-bold drop-shadow-lg text-primary">Angkatan II</h1>
        </div>
    </div>
    <div class="mx-auto">
        <br>
        <img class="mx-auto" src="/img/fotokitaa.jpg" alt="" loading="lazy">
    </div>
</div>
{{-- Tentang Dema Section --}}
<div class="about-section">
    <div class="about flex flex-col lg:flex-row max-w-7xl mx-auto px-12 py-16 text-primary">
        <div class="logo-about w-full flex items-center justify-center px-10">
            <img class="w-[150rem]" src="/img/logokkn.png" alt="" loading="lazy">
        </div>
        <div class="text-about">
            <h2 class="font-bold text-[50px] text-center mb-8">Tentang KKN</h2>
            <p class="text-base font-normal">Kuliah Kerja Nyata (KKN) adalah program pengabdian kepada masyarakat yang
                biasanya diwajibkan bagi mahasiswa di perguruan tinggi di Indonesia.</p>
            <br>
            <p>Dalam program ini, mahasiswa diterjunkan ke masyarakat untuk menerapkan ilmu yang telah dipelajari di
                perkuliahan dengan tujuan
                membantu pembangunan dan pemberdayaan masyarakat.</p>
        </div>
    </div>
</div>
{{-- Visi Misi Section --}}
<div class="visimisi-section bg-secondary text-white">
    <div class="visimisi flex flex-wrap md:flex-nowrap mx-auto max-w-7xl px-10 py-16">
        <div class="visi">
            <h2 class="font-semibold text-xl bg-primary inline-block px-5 py-3 rounded-lg mb-5">Visi
            </h2>
            <p class="text-[18px]">Mewujudkan mahasiswa yang berperan aktif dalam pembangunan masyarakat melalui
                pengabdian berbasis ilmu pengetahuan, teknologi, dan budaya dengan semangat kebersamaan dan
                keberlanjutan.</p>
        </div>
        <div class="misi mt-4 md:mt-0">
            <h2 class="font-semibold text-xl bg-primary inline-block px-5 py-3 rounded-lg mb-5">Misi
            </h2>
            <ul class="text-[18px]">
                <li>- Menerapkan ilmu dan keterampilan yang telah diperoleh di bangku kuliah untuk membantu
                    menyelesaikan permasalahan di masyarakat.
                </li>
                <br>
                <li>- Memberdayakan masyarakat melalui program-program yang berkelanjutan dan berbasis kebutuhan lokal.
                </li>
                <li>- Meningkatkan kepedulian sosial dan tanggung jawab mahasiswa terhadap lingkungan dan masyarakat.
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- Count Section --}}
<div class="count-section text-primary">
    <div
        class="count flex flex-wrap md:flex-nowrap gap-12 max-w-7xl px-12 py-16 mx-auto justify-center md:justify-evenly items-center">
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">3</h2>
            <span class="font-bold text-xl">Dosen Pembimbing Lapangan</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">9</h2>
            <span class="font-bold text-xl">Mahasiswa</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">15</h2>
            <span class="font-bold text-xl">Mahasiswi</span>
        </div>
        <div class="count-card text-center">
            <h2 class="font-bold text-5xl">9</h2>
            <span class="font-bold text-xl">Mitra</span>
        </div>
    </div>
</div>
{{-- Artikel Section --}}
<div class="artikel-section bg-primary text-white">
    <div class="artikel flex flex-col md:flex-row max-w-7xl px-12 pt-16 mx-auto">
        <div class="heading-artikel pr-10 mr-8">
            <h2 class="font-semibold text-5xl mb-8">Berita Acara</h2>
            <img class="w-[750px] h-[300px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out mb-4"
                src="{{ asset('storage/' . $beritaUtama->image) }}" alt="" loading="lazy">
            <h3 class="font-bold text-3xl">{{ $beritaUtama->judul }}</h3>
            <br>
            <a href="/blog/{{ $beritaUtama->id }}"
                class="text-sixth font-semibold text-xl hover:opacity-85">Selengkapnya >></a>
        </div>
        <div class="mt-6 md:mt-0 kanan-artikel w-full flex flex-wrap pl-8 border-l-4 border-secondary">
            @foreach ($blogs as $blog)
            {{-- card artikel --}}
            <a class="hover:bg-third/80 rounded-lg p-2" href="/blog/{{ $blog->id }}">
                <div class="card-artikel text-center">
                    <img class="w-[300px] h-[200px] object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out mb-4"
                        src="{{ asset('storage/' . $blog->image) }}" alt="" loading="lazy">
                    <span class="font-semibold text-xl mt-3">{{ $blog->judul }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="flex max-w-7xl px-12 justify-center align-center pt-8 pb-16 mx-auto">
        <a href="" class="bg-sixth text-white px-2 py-2 rounded-md hover:opacity-85">Artikel Lainnya</a>
    </div>
</div>
@endsection
