@extends('layouts.app')

@section('title', 'SeaSupply')
@section('meta_description', 'SeaSupply — Marketplace UMKM Olahan Laut Indonesia. Belanja rajungan, ikan kering, kerupuk ikan, dan produk laut berkualitas.')

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
                <input id="search-home" type="search" placeholder="Cari produk olahan laut...">
            </div>

            <nav class="navbar__nav">
                <a href="{{ url('/') }}" class="navbar__nav-link active">Beranda</a>
                <a href="{{ url('/katalog') }}" class="navbar__nav-link">Produk</a>
                <a href="{{ url('/pesanan') }}" class="navbar__nav-link">Pesanan</a>
                <a href="{{ url('/akun') }}" class="navbar__nav-link">Akun</a>
            </nav>
        </div>
    </nav>

    {{-- ===== HERO ===== --}}
    <section class="hero">
        <div class="hero__inner">
            <div class="hero__content animate-fadein">
                <p class="section-label" style="color: rgba(255,255,255,0.7);">🌊 Marketplace UMKM Olahan Laut</p>
                <h1 class="hero__title">Temukan produk<br>olahan laut segar<br>dari nelayan lokal</h1>
                <p class="hero__desc">
                    SeaSupply menghubungkan Anda langsung dengan pengusaha UMKM olahan laut Indonesia.
                    Produk berkualitas, harga terjangkau, langsung dari sumber.
                </p>
                <div class="hero__cta">
                    <a href="{{ url('/katalog') }}" id="btn-mulai-belanja" class="btn btn-lg" style="background:var(--color-white); color:var(--color-ocean-teal); border-color:var(--color-white);">
                        Mulai belanja
                    </a>
                    <a href="{{ url('/dashboard') }}" id="btn-daftar-usaha" class="btn btn-lg btn-secondary" style="border-color:rgba(255,255,255,0.5); color:var(--color-white);">
                        Daftarkan usaha
                    </a>
                </div>
            </div>
            <div class="hero__image">🐟</div>
        </div>
    </section>

    {{-- ===== FEATURES ===== --}}
    <div style="background:var(--color-white); border-bottom: 1px solid var(--color-border);">
        <div class="container" style="padding-block: var(--space-8);">
            <div class="flex gap-8 justify-center flex-wrap" style="text-align:center;">
                <div style="max-width:200px;">
                    <div style="font-size:2rem; margin-bottom:var(--space-3);">🦀</div>
                    <h3 class="h4" style="margin-bottom:var(--space-1);">Produk Segar</h3>
                    <p class="text-sm text-muted">Langsung dari nelayan dan pengolah lokal terpercaya</p>
                </div>
                <div style="max-width:200px;">
                    <div style="font-size:2rem; margin-bottom:var(--space-3);">🚚</div>
                    <h3 class="h4" style="margin-bottom:var(--space-1);">Pengiriman Cepat</h3>
                    <p class="text-sm text-muted">Estimasi 1–3 hari kerja ke seluruh Indonesia</p>
                </div>
                <div style="max-width:200px;">
                    <div style="font-size:2rem; margin-bottom:var(--space-3);">✅</div>
                    <h3 class="h4" style="margin-bottom:var(--space-1);">Terverifikasi</h3>
                    <p class="text-sm text-muted">Semua penjual dan produk terverifikasi kualitasnya</p>
                </div>
                <div style="max-width:200px;">
                    <div style="font-size:2rem; margin-bottom:var(--space-3);">💳</div>
                    <h3 class="h4" style="margin-bottom:var(--space-1);">Bayar Mudah</h3>
                    <p class="text-sm text-muted">Transfer bank, e-wallet, dan berbagai metode pembayaran</p>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== PRODUK UNGGULAN ===== --}}
    <div class="page-content">
        <section style="margin-bottom: var(--space-8);">
            <div class="flex items-center justify-between mb-4">
                <h2 class="h2">Produk unggulan</h2>
                <a href="{{ url('/katalog') }}" id="link-lihat-semua" class="btn btn-secondary btn-sm">Lihat semua →</a>
            </div>

            <div class="product-grid">
                <article class="card animate-fadein" style="animation-delay:0ms;" id="unggulan-1">
                    <div class="card__image" style="height:180px; background:linear-gradient(135deg,#e8f5f5,#c8e6e6);">
                        <span style="font-size:3rem;">🦀</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Rajungan</span>
                        <h3 class="card__title">Olahan Rajungan</h3>
                        <p class="card__subtitle">Toko Bahari Sejati</p>
                        <p class="card__price">Rp 85.000 <span class="card__price-sub">/ 500g</span></p>
                        <a href="{{ url('/produk/rajungan') }}" id="unggulan-btn-1" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                <article class="card animate-fadein" style="animation-delay:80ms;" id="unggulan-2">
                    <div class="card__image" style="height:180px; background:linear-gradient(135deg,#fff8e8,#f5edd6);">
                        <span style="font-size:3rem;">🐟</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Ikan Kering</span>
                        <h3 class="card__title">Ikan Garang</h3>
                        <p class="card__subtitle">UD Laut Biru</p>
                        <p class="card__price">Rp 65.000 <span class="card__price-sub">/ 1 liter</span></p>
                        <a href="{{ url('/produk/ikan-garang') }}" id="unggulan-btn-2" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>

                <article class="card animate-fadein" style="animation-delay:160ms;" id="unggulan-3">
                    <div class="card__image" style="height:180px; background:linear-gradient(135deg,#fdf0e8,#fad5b8);">
                        <span style="font-size:3rem;">🍘</span>
                    </div>
                    <div class="card__body">
                        <span class="chip" style="margin-bottom:var(--space-2); font-size:0.7rem; padding:1px 8px;">Kerupuk</span>
                        <h3 class="card__title">Kerupuk Ikan</h3>
                        <p class="card__subtitle">Mak Ipah</p>
                        <p class="card__price">Rp 42.000 <span class="card__price-sub">/ 1 liter</span></p>
                        <a href="{{ url('/produk/kerupuk-ikan') }}" id="unggulan-btn-3" class="btn btn-primary btn-full">Lihat detail</a>
                    </div>
                </article>
            </div>
        </section>

        {{-- CTA Banner --}}
        <section>
            <div style="background: linear-gradient(135deg, var(--color-ink) 0%, var(--color-ink-80) 100%); border-radius: var(--radius-2xl); padding: var(--space-10) var(--space-8); display:flex; align-items:center; justify-content:space-between; gap:var(--space-6); flex-wrap:wrap;">
                <div>
                    <p class="section-label" style="color: var(--color-ocean-teal); margin-bottom:var(--space-2);">Untuk Pemilik Usaha</p>
                    <h2 style="font-family:var(--font-serif); font-size:1.5rem; font-weight:700; color:white; margin-bottom:var(--space-2);">Punya UMKM olahan laut?</h2>
                    <p style="color:rgba(255,255,255,0.65); font-size:0.9375rem; max-width:400px;">Daftarkan usaha Anda dan mulai jual produk ke ribuan pelanggan di seluruh Indonesia. Gratis bergabung!</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ url('/dashboard') }}" id="btn-cta-dashboard" class="btn btn-primary btn-lg">Kelola usaha saya</a>
                </div>
            </div>
        </section>
    </div>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer" style="margin-top: var(--space-12);">
        <div class="footer__inner">
            <span class="footer__logo">🐟 SeaSupply</span>
            <div class="flex gap-4">
                <a href="{{ url('/katalog') }}" style="color:rgba(255,255,255,0.5); font-size:0.875rem;">Katalog</a>
                <a href="{{ url('/dashboard') }}" style="color:rgba(255,255,255,0.5); font-size:0.875rem;">Dashboard</a>
                <a href="{{ url('/pegawai') }}" style="color:rgba(255,255,255,0.5); font-size:0.875rem;">Pegawai</a>
            </div>
            <span class="footer__copy">© 2024 SeaSupply · UMKM Olahan Laut Indonesia</span>
        </div>
    </footer>

</div>
@endsection
