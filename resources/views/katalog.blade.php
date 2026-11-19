@extends('layouts.app')

@section('title', 'Katalog Produk')
@section('meta_description', 'Temukan produk olahan laut berkualitas — Rajungan, Ikan Kering, Kerupuk Ikan dari UMKM lokal.')

@section('content')
<div class="page-wrapper">

    {{-- ===== NAVBAR ===== --}}
    <nav class="navbar">
        <div class="navbar__inner">
            <a href="{{ url('/') }}" class="navbar__logo">🐟 SeaSupply</a>

            <div class="navbar__search">
                <span class="navbar__search-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                    </svg>
                </span>
                <input id="search-produk" type="search" placeholder="Cari produk, misalnya kerupuk ikan...">
            </div>

            <nav class="navbar__nav">
                <a href="{{ url('/') }}" class="navbar__nav-link active">Beranda</a>
                <a href="{{ url('/katalog') }}" class="navbar__nav-link">Produk</a>
                <a href="{{ url('/pesanan') }}" class="navbar__nav-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>
                    </svg>
                    Pesanan
                </a>
                <a href="{{ url('/akun') }}" class="navbar__nav-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                    </svg>
                    Akun
                </a>
            </nav>
        </div>
    </nav>

    {{-- ===== HERO ===== --}}
    <section class="hero">
        <div class="hero__inner">
            <div class="hero__content">
                <p class="section-label" style="color: rgba(255,255,255,0.7);">Marketplace UMKM</p>
                <h1 class="hero__title">Temukan produk<br>olahan laut segar</h1>
                <p class="hero__desc">Jelajahi produk berkualitas dari pengusaha laut lokal Indonesia — langsung dari sumber terpercaya.</p>
                <div class="hero__cta">
                    <a href="#produk-pilihan" id="btn-jelajahi" class="btn btn-lg" style="background:var(--color-white); color:var(--color-ocean-teal); border-color:var(--color-white);">
                        Jelajahi produk
                    </a>
                    <a href="{{ url('/katalog') }}" class="btn btn-lg btn-secondary" style="border-color:rgba(255,255,255,0.5); color:var(--color-white);">
                        Semua kategori
                    </a>
                </div>
            </div>
            <div class="hero__image">🦀</div>
        </div>
    </section>

    {{-- ===== MAIN CONTENT ===== --}}
    <div class="page-content" id="produk-pilihan">

        {{-- Kategori Produk --}}
        <section style="margin-bottom: var(--space-8);">
            <h2 class="h3" style="margin-bottom: var(--space-4);">Kategori produk</h2>
            <div class="flex gap-2 flex-wrap">
                <button class="chip active" data-filter="kategori" data-group="kategori" id="filter-semua">Semua</button>
                <button class="chip" data-filter="rajungan" data-group="kategori" id="filter-rajungan">🦀 Rajungan</button>
                <button class="chip" data-filter="ikan-kering" data-group="kategori" id="filter-ikan">🐟 Ikan Kering</button>
                <button class="chip" data-filter="kerupuk" data-group="kategori" id="filter-kerupuk">🍘 Kerupuk Ikan</button>
                <button class="chip" data-filter="cumi" data-group="kategori" id="filter-cumi">🦑 Cumi Asin</button>
                <button class="chip" data-filter="terasi" data-group="kategori" id="filter-terasi">🥫 Terasi & Sambal</button>
            </div>
        </section>

        {{-- Produk Pilihan --}}
        <section>
            <h2 class="section-title">Produk pilihan</h2>
            <div class="product-grid" id="product-grid">

                {{-- Card 1 --}}
                <article class="card animate-fadein" style="animation-delay: 0ms;" id="produk-1">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #e8f5f5, #c8e6e6);">
                        <span style="font-size: 3rem;">🦀</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Rajungan</span>
                        <h3 class="card__title">Olahan Rajungan</h3>
                        <p class="card__subtitle">Toko Bahari Sejati · Stok: 48 kg</p>
                        <p class="card__price">
                            Rp 85.000
                            <span class="card__price-sub">/ 500 g</span>
                        </p>
                        <a href="{{ url('/produk/rajungan') }}" id="lihat-rajungan" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                {{-- Card 2 --}}
                <article class="card animate-fadein" style="animation-delay: 80ms;" id="produk-2">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #fff8e8, #f5edd6);">
                        <span style="font-size: 3rem;">🐟</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Ikan Kering</span>
                        <h3 class="card__title">Ikan Garang</h3>
                        <p class="card__subtitle">UD Laut Biru · Stok: 1 Liter</p>
                        <p class="card__price">
                            Rp 65.000
                            <span class="card__price-sub">/ 1 liter</span>
                        </p>
                        <a href="{{ url('/produk/ikan-garang') }}" id="lihat-ikan-garang" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                {{-- Card 3 --}}
                <article class="card animate-fadein" style="animation-delay: 160ms;" id="produk-3">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #fdf0e8, #fad5b8);">
                        <span style="font-size: 3rem;">🍘</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Kerupuk</span>
                        <h3 class="card__title">Kerupuk Ikan</h3>
                        <p class="card__subtitle">Mak Ipah · Stok: 1 Liter</p>
                        <p class="card__price">
                            Rp 42.000
                            <span class="card__price-sub">/ 1 liter</span>
                        </p>
                        <a href="{{ url('/produk/kerupuk-ikan') }}" id="lihat-kerupuk" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                {{-- Card 4 --}}
                <article class="card animate-fadein" style="animation-delay: 240ms;" id="produk-4">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #e8eef8, #c8d4f0);">
                        <span style="font-size: 3rem;">🦑</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Cumi Asin</span>
                        <h3 class="card__title">Cumi Asin Premium</h3>
                        <p class="card__subtitle">Nelayan Jaya · Stok: 30 kg</p>
                        <p class="card__price">
                            Rp 110.000
                            <span class="card__price-sub">/ 500 g</span>
                        </p>
                        <a href="{{ url('/produk/cumi-asin') }}" id="lihat-cumi" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                {{-- Card 5 --}}
                <article class="card animate-fadein" style="animation-delay: 320ms;" id="produk-5">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #f8e8e8, #f0c8c8);">
                        <span style="font-size: 3rem;">🥫</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Terasi</span>
                        <h3 class="card__title">Terasi Udang Rebon</h3>
                        <p class="card__subtitle">Dapur Pantai · Stok: 200 pcs</p>
                        <p class="card__price">
                            Rp 28.000
                            <span class="card__price-sub">/ 100 g</span>
                        </p>
                        <a href="{{ url('/produk/terasi-udang') }}" id="lihat-terasi" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                {{-- Card 6 --}}
                <article class="card animate-fadein" style="animation-delay: 400ms;" id="produk-6">
                    <div class="card__image" style="height: 180px; background: linear-gradient(135deg, #e8f8ee, #c8f0d8);">
                        <span style="font-size: 3rem;">🍤</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Udang</span>
                        <h3 class="card__title">Ebi Kering Halus</h3>
                        <p class="card__subtitle">Pantai Muara · Stok: 80 kg</p>
                        <p class="card__price">
                            Rp 95.000
                            <span class="card__price-sub">/ 250 g</span>
                        </p>
                        <a href="{{ url('/produk/ebi') }}" id="lihat-ebi" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

            </div>
        </section>

    </div>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer">
        <div class="footer__inner">
            <span class="footer__logo">🐟 SeaSupply</span>
            <span class="footer__copy">© 2024 SeaSupply · Marketplace UMKM Olahan Laut Indonesia</span>
        </div>
    </footer>

</div>
@endsection
