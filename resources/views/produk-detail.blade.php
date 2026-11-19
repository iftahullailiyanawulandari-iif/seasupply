@extends('layouts.app')

@section('title', 'Detail Produk')
@section('meta_description', 'Detail produk olahan laut — informasi harga, stok, dan pemesanan.')

@section('content')
<div class="page-wrapper">

    {{-- ===== NAVBAR ===== --}}
    <nav class="navbar">
        <div class="navbar__inner">
            <a href="{{ url('/') }}" class="navbar__logo">🐟 SeaSupply</a>

            {{-- Breadcrumb nav --}}
            <div class="flex items-center gap-2 text-sm" style="color: var(--color-slate);">
                <a href="{{ url('/katalog') }}" class="navbar__nav-link">Produk</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                <span style="color: var(--color-ocean-teal); font-weight:500;">Olahan Rajungan</span>
            </div>

            <nav class="navbar__nav">
                <a href="{{ url('/katalog') }}" class="navbar__nav-link">Produk</a>
                <a href="{{ url('/pesanan') }}" class="navbar__nav-link">Pesanan</a>
                <a href="{{ url('/akun') }}" class="navbar__nav-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                    </svg>
                    Akun
                </a>
            </nav>
        </div>
    </nav>

    {{-- ===== PRODUCT DETAIL CONTENT ===== --}}
    <div class="page-content">

        {{-- Back link --}}
        <a href="{{ url('/katalog') }}" id="btn-kembali" class="flex items-center gap-2 text-sm" style="color: var(--color-slate); margin-bottom: var(--space-6); display:inline-flex;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
            Kembali ke katalog
        </a>

        {{-- Product detail layout --}}
        <div class="card card--flat" style="padding: var(--space-6);">
            <div class="product-detail">

                {{-- Left: Product Image --}}
                <div>
                    <div class="product-detail__image" style="background: linear-gradient(135deg, #e8f5f5, #c8e6e6);">
                        <div style="display:flex; flex-direction:column; align-items:center; gap: var(--space-3);">
                            <span style="font-size: 5rem;">🦀</span>
                            <span class="text-sm text-muted">Foto produk</span>
                        </div>
                    </div>

                    {{-- Thumbnail strip --}}
                    <div class="flex gap-2 mt-3">
                        <div id="thumb-1" style="width:64px; height:64px; border-radius:var(--radius-sm); background:linear-gradient(135deg,#e8f5f5,#c8e6e6); border:2px solid var(--color-ocean-teal); cursor:pointer; display:flex; align-items:center; justify-content:center; font-size:1.5rem;">🦀</div>
                        <div id="thumb-2" style="width:64px; height:64px; border-radius:var(--radius-sm); background:var(--color-surface-2); border:1.5px solid var(--color-border); cursor:pointer; display:flex; align-items:center; justify-content:center; font-size:1.5rem;">📦</div>
                        <div id="thumb-3" style="width:64px; height:64px; border-radius:var(--radius-sm); background:var(--color-surface-2); border:1.5px solid var(--color-border); cursor:pointer; display:flex; align-items:center; justify-content:center; font-size:1.5rem;">🏷️</div>
                    </div>
                </div>

                {{-- Right: Product Info --}}
                <div class="product-detail__info">

                    <div class="flex items-center gap-2 mb-2">
                        <span class="chip" style="font-size:0.7rem; padding:1px 8px;">Rajungan</span>
                        <span class="badge badge-dikirim">Tersedia</span>
                    </div>

                    <h1 class="product-detail__name" id="nama-produk">Nama produk</h1>
                    <p class="product-detail__shop">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline; vertical-align:middle; margin-right:4px;">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        Nama toko / toko
                    </p>

                    <div class="divider" style="margin: var(--space-4) 0;"></div>

                    <p class="product-detail__price-label">Harga</p>
                    <p class="product-detail__price" id="harga-produk">Rp —</p>

                    <p class="product-detail__stock" id="stok-produk">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline; vertical-align:middle; margin-right:4px;">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Ketersediaan stok →
                    </p>

                    <div class="divider" style="margin: var(--space-4) 0;"></div>

                    <p class="product-detail__qty-label">Jumlah pesanan</p>
                    <div class="qty-selector" id="qty-selector">
                        <button class="qty-selector__btn" data-qty="minus" aria-label="Kurangi">−</button>
                        <span class="qty-selector__val">1</span>
                        <button class="qty-selector__btn" data-qty="plus" aria-label="Tambah">+</button>
                    </div>

                    <div class="product-detail__actions">
                        <button id="btn-buat-pesanan" class="btn btn-primary btn-lg" style="flex:1;" data-modal-open="modal-konfirmasi">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>
                            </svg>
                            Buat pesanan
                        </button>
                        <button id="btn-favorit" class="btn btn-ghost btn-lg btn-icon" aria-label="Favorit" title="Simpan ke favorit">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                            </svg>
                        </button>
                    </div>

                    {{-- Trust badges --}}
                    <div class="flex gap-4 mt-4">
                        <div class="flex items-center gap-1 text-xs text-muted">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Produk terverifikasi
                        </div>
                        <div class="flex items-center gap-1 text-xs text-muted">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            Pengiriman 1–3 hari
                        </div>
                    </div>

                </div>
            </div>

            {{-- Description --}}
            <div class="product-detail__description" id="deskripsi-produk">
                <h3 class="h4" style="margin-bottom: var(--space-3);">Deskripsi produk</h3>
                <p class="text-sm" style="color: var(--color-ink-60); line-height:1.75;">
                    Informasi produk ditulis oleh penjual. Produk ini merupakan hasil olahan laut segar yang diproses secara higienis oleh UMKM lokal.
                    Tersedia dalam kemasan bersih dan siap kirim. Cocok sebagai lauk, camilan, atau bahan masak sehari-hari.
                </p>
                <div class="flex gap-6 mt-4">
                    <div>
                        <p class="text-xs text-muted" style="margin-bottom:4px;">Berat bersih</p>
                        <p class="text-sm font-semibold">500 gram</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted" style="margin-bottom:4px;">Masa simpan</p>
                        <p class="text-sm font-semibold">6 bulan</p>
                    </div>
                    <div>
                        <p class="text-xs text-muted" style="margin-bottom:4px;">Asal daerah</p>
                        <p class="text-sm font-semibold">Kepulauan Seribu</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer">
        <div class="footer__inner">
            <span class="footer__logo">🐟 SeaSupply</span>
            <span class="footer__copy">© 2024 SeaSupply · Marketplace UMKM Olahan Laut Indonesia</span>
        </div>
    </footer>

</div>

{{-- ===== MODAL KONFIRMASI PESANAN ===== --}}
<div class="modal-overlay" id="modal-konfirmasi" role="dialog" aria-modal="true" aria-labelledby="modal-konfirmasi-title">
    <div class="modal">
        <h2 class="modal__title" id="modal-konfirmasi-title">Konfirmasi pesanan</h2>
        <p class="modal__body">
            Pastikan nama produk, jumlah, dan alamat pengiriman sudah benar sebelum melanjutkan.
            Pesanan tidak dapat dibatalkan setelah dikonfirmasi.
        </p>
        <div class="modal__actions">
            <button class="btn btn-ghost" data-modal-close id="btn-modal-batal">Batal</button>
            <button class="btn btn-primary" id="btn-modal-konfirmasi">Ya, pesan sekarang</button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Favorit toggle
const favBtn = document.getElementById('btn-favorit');
let isFav = false;
if (favBtn) {
    favBtn.addEventListener('click', function() {
        isFav = !isFav;
        const icon = favBtn.querySelector('path');
        if (icon) {
            icon.setAttribute('fill', isFav ? 'var(--color-sea-red)' : 'none');
            icon.setAttribute('stroke', isFav ? 'var(--color-sea-red)' : 'currentColor');
        }
        favBtn.style.color = isFav ? 'var(--color-sea-red)' : '';
    });
}
</script>
@endpush
