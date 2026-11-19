@extends('layouts.app')

@section('title', 'Operasional Pegawai')
@section('meta_description', 'Panel operasional pegawai SeaSupply dengan akses terbatas untuk mengelola pesanan.')

@section('content')
<div class="dashboard-layout">

    {{-- ===== SIDEBAR ===== --}}
    <aside class="sidebar-nav" id="sidebar-pegawai">
        <a href="{{ url('/') }}" class="sidebar-nav__logo">🐟 SeaSupply</a>

        <ul class="sidebar-nav__menu">
            <li>
                <a href="{{ url('/pegawai') }}" class="sidebar-nav__link active" id="nav-peg-ringkasan">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                    </svg>
                    <span>Ringkasan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/pegawai/pesanan') }}" class="sidebar-nav__link" id="nav-peg-pesanan">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>
                    </svg>
                    <span>Pesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/pegawai/produk') }}" class="sidebar-nav__link" id="nav-peg-produk">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
                    </svg>
                    <span>Produk</span>
                </a>
            </li>
        </ul>

        {{-- User info --}}
        <div style="margin-top:auto; padding: var(--space-5); border-top:1px solid rgba(255,255,255,0.1);">
            <div class="flex items-center gap-2">
                <div style="width:32px; height:32px; border-radius:50%; background:var(--color-iris); display:flex; align-items:center; justify-content:center; font-size:0.875rem; color:white; font-weight:600; flex-shrink:0;">
                    E
                </div>
                <div style="overflow:hidden;">
                    <p class="text-xs font-semibold" style="color:var(--color-white); overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">Pegawai</p>
                    <p class="text-xs" style="color:rgba(255,255,255,0.4);">Akses terbatas</p>
                </div>
            </div>
        </div>
    </aside>

    {{-- ===== MAIN CONTENT ===== --}}
    <main class="dashboard-main">

        {{-- Header --}}
        <div class="dashboard-header">
            <h1 class="dashboard-header__title">Tugas operasional</h1>
            <p class="dashboard-header__sub">Panel untuk memantau dan memproses pesanan harian.</p>
        </div>

        {{-- Akses Terbatas Panel --}}
        <div class="card card--flat" style="padding: var(--space-5); margin-bottom: var(--space-6); border-left: 4px solid var(--color-iris);" id="panel-akses">
            <div class="flex items-start gap-3">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-iris)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0; margin-top:2px;">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                </svg>
                <div>
                    <h3 class="h4" style="color: var(--color-iris); margin-bottom:var(--space-1);">Akses terbatas</h3>
                    <p class="text-sm" style="color: var(--color-ink-60); line-height:1.65;">
                        Anda mengakses panel ini sebagai <strong>pegawai</strong>. Fitur seperti keuangan, pengaturan toko, dan manajemen pengguna tidak tersedia.
                        Hubungi pemilik usaha jika membutuhkan akses tambahan.
                    </p>
                </div>
            </div>
        </div>

        {{-- Daftar Pesanan --}}
        <section id="daftar-pesanan">
            <h2 class="section-title">Daftar pesanan</h2>
            <div class="table-wrapper">
                <table class="table" id="tabel-pesanan-pegawai">
                    <thead>
                        <tr>
                            <th>ID pesanan</th>
                            <th>Ringkasan</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="row-peg-001">
                            <td style="font-family:monospace; font-size:0.8125rem;">#0001</td>
                            <td>
                                <div>
                                    <p class="text-sm font-semibold">Olahan Rajungan × 2</p>
                                    <p class="text-xs text-muted">Siti Rahayu · 19 Nov 2024</p>
                                </div>
                            </td>
                            <td><span class="badge badge-menunggu">Menunggu</span></td>
                            <td>
                                <div class="flex gap-2">
                                    <button id="aksi-peg-proses-001" class="btn btn-sm btn-primary" data-modal-open="modal-proses">Proses</button>
                                    <button id="aksi-peg-lihat-001" class="btn btn-sm btn-ghost">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr id="row-peg-002">
                            <td style="font-family:monospace; font-size:0.8125rem;">#0002</td>
                            <td>
                                <div>
                                    <p class="text-sm font-semibold">Ikan Garang × 5</p>
                                    <p class="text-xs text-muted">Budi Santoso · 18 Nov 2024</p>
                                </div>
                            </td>
                            <td><span class="badge badge-proses">Diproses</span></td>
                            <td>
                                <div class="flex gap-2">
                                    <button id="aksi-peg-kirim-002" class="btn btn-sm btn-secondary">Kirim</button>
                                    <button id="aksi-peg-lihat-002" class="btn btn-sm btn-ghost">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr id="row-peg-003">
                            <td style="font-family:monospace; font-size:0.8125rem;">#0003</td>
                            <td>
                                <div>
                                    <p class="text-sm font-semibold">Kerupuk Ikan × 10</p>
                                    <p class="text-xs text-muted">Ani Lestari · 17 Nov 2024</p>
                                </div>
                            </td>
                            <td><span class="badge badge-dikirim">Dikirim</span></td>
                            <td>
                                <div class="flex gap-2">
                                    <button id="aksi-peg-selesai-003" class="btn btn-sm btn-ghost">Konfirmasi</button>
                                    <button id="aksi-peg-lihat-003" class="btn btn-sm btn-ghost">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr id="row-peg-004">
                            <td style="font-family:monospace; font-size:0.8125rem;">#0004</td>
                            <td>
                                <div>
                                    <p class="text-sm font-semibold">Cumi Asin Premium × 3</p>
                                    <p class="text-xs text-muted">Hendra Wijaya · 16 Nov 2024</p>
                                </div>
                            </td>
                            <td><span class="badge badge-selesai">Selesai</span></td>
                            <td>
                                <button id="aksi-peg-lihat-004" class="btn btn-sm btn-ghost">Detail</button>
                            </td>
                        </tr>

                        {{-- Empty state (hidden by default) --}}
                        <tr id="row-peg-empty" style="display:none;">
                            <td colspan="4">
                                <div class="empty-state">
                                    <div class="empty-state__icon">📋</div>
                                    <p class="empty-state__title">Pesanan yang ditangani akan tampil di sini</p>
                                    <p class="empty-state__desc">Belum ada pesanan yang perlu diproses saat ini.</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Info note --}}
            <div class="alert alert-info mt-4" id="info-pegawai">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0; margin-top:1px;">
                    <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
                <span>
                    Keterangan: pegawai tidak dapat mengubah pengaturan toko atau laporan penjualan.
                    Hubungi pemilik usaha untuk perubahan lebih lanjut.
                </span>
            </div>
        </section>

    </main>
</div>

{{-- ===== MODAL PROSES PESANAN ===== --}}
<div class="modal-overlay" id="modal-proses" role="dialog" aria-modal="true" aria-labelledby="modal-proses-title">
    <div class="modal">
        <h2 class="modal__title" id="modal-proses-title">Proses pesanan #0001</h2>
        <p class="modal__body">
            Pastikan produk sudah disiapkan dan siap untuk dikemas sebelum mengonfirmasi proses pesanan ini.
        </p>
        <div class="form-group" style="margin-bottom:var(--space-4);">
            <label class="form-label" for="catatan-proses">Catatan (opsional)</label>
            <textarea class="form-input" id="catatan-proses" rows="3" placeholder="Tambahkan catatan pengiriman..."></textarea>
        </div>
        <div class="modal__actions">
            <button class="btn btn-ghost" data-modal-close id="btn-modal-proses-batal">Batal</button>
            <button class="btn btn-primary" id="btn-modal-proses-ok">Konfirmasi proses</button>
        </div>
    </div>
</div>

@endsection
