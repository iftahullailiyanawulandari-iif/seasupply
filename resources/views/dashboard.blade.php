@extends('layouts.app')

@section('title', 'Dashboard Pemilik Usaha')
@section('meta_description', 'Dashboard pengelolaan produk, pesanan, keuangan, dan pegawai untuk pemilik usaha SeaSupply.')

@section('content')
<div class="dashboard-layout">

    {{-- ===== SIDEBAR ===== --}}
    <aside class="sidebar-nav" id="sidebar">
        <a href="{{ url('/') }}" class="sidebar-nav__logo">🐟 SeaSupply</a>

        <ul class="sidebar-nav__menu">
            <li>
                <a href="{{ url('/dashboard') }}" class="sidebar-nav__link active" id="nav-dashboard">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/dashboard/produk') }}" class="sidebar-nav__link" id="nav-produk">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
                    </svg>
                    <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/dashboard/pesanan') }}" class="sidebar-nav__link" id="nav-pesanan">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>
                    </svg>
                    <span>Pesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/dashboard/keuangan') }}" class="sidebar-nav__link" id="nav-keuangan">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                    <span>Keuangan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/pegawai') }}" class="sidebar-nav__link" id="nav-pegawai">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                    </svg>
                    <span>Pegawai</span>
                </a>
            </li>
        </ul>

        {{-- User info --}}
        <div style="margin-top:auto; padding: var(--space-5); border-top:1px solid rgba(255,255,255,0.1);">
            <div class="flex items-center gap-2">
                <div style="width:32px; height:32px; border-radius:50%; background:var(--color-ocean-teal); display:flex; align-items:center; justify-content:center; font-size:0.875rem; color:white; font-weight:600; flex-shrink:0;">
                    P
                </div>
                <div style="overflow:hidden;">
                    <p class="text-xs font-semibold" style="color:var(--color-white); overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">Pemilik Usaha</p>
                    <p class="text-xs" style="color:rgba(255,255,255,0.4);">Admin</p>
                </div>
            </div>
        </div>
    </aside>

    {{-- ===== MAIN CONTENT ===== --}}
    <main class="dashboard-main">

        {{-- Header --}}
        <div class="dashboard-header">
            <h1 class="dashboard-header__title">Dashboard pemilik usaha</h1>
            <p class="dashboard-header__sub">Kelola produk, pesanan, dan keuangan usaha Anda.</p>
        </div>

        {{-- Stats Cards --}}
        <div class="stats-grid">
            <div class="stat-card" id="stat-produk">
                <p class="stat-card__label">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline; vertical-align:middle; margin-right:4px;">
                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
                    </svg>
                    Produk aktif
                </p>
                <p class="stat-card__value">—</p>
            </div>

            <div class="stat-card" id="stat-pesanan">
                <p class="stat-card__label">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline; vertical-align:middle; margin-right:4px;">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/>
                    </svg>
                    Pesanan masuk
                </p>
                <p class="stat-card__value">—</p>
            </div>

            <div class="stat-card" id="stat-pendapatan">
                <p class="stat-card__label">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline; vertical-align:middle; margin-right:4px;">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                    Pendapatan
                </p>
                <p class="stat-card__value teal">Rp —</p>
            </div>
        </div>

        {{-- Pesanan Terbaru --}}
        <section style="margin-bottom: var(--space-6);">
            <h2 class="section-title">Pesanan terbaru</h2>
            <div class="table-wrapper" id="tabel-pesanan">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID pesanan</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace; font-size:0.8125rem;">#0001</td>
                            <td>Siti Rahayu</td>
                            <td style="color:var(--color-slate);">19/11/2024</td>
                            <td><span class="badge badge-menunggu">Menunggu</span></td>
                            <td>
                                <a href="#" id="aksi-0001" class="btn btn-sm btn-secondary">Proses</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:monospace; font-size:0.8125rem;">#0002</td>
                            <td>Budi Santoso</td>
                            <td style="color:var(--color-slate);">18/11/2024</td>
                            <td><span class="badge badge-dikirim">Dikirim</span></td>
                            <td>
                                <a href="#" id="aksi-0002" class="btn btn-sm btn-ghost">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:monospace; font-size:0.8125rem;">#0003</td>
                            <td>Ani Lestari</td>
                            <td style="color:var(--color-slate);">17/11/2024</td>
                            <td><span class="badge badge-selesai">Selesai</span></td>
                            <td>
                                <a href="#" id="aksi-0003" class="btn btn-sm btn-ghost">Lihat</a>
                            </td>
                        </tr>
                        <tr class="table--empty" id="row-empty" style="display:none;">
                            <td colspan="5">
                                <div class="empty-state">
                                    <div class="empty-state__icon">📋</div>
                                    <p class="empty-state__title">Data pesanan akan tampil di sini</p>
                                    <p class="empty-state__desc">Belum ada pesanan yang masuk.</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        {{-- Action Buttons --}}
        <div class="flex gap-3 flex-wrap">
            <a href="{{ url('/dashboard/produk/tambah') }}" id="btn-tambah-produk" class="btn btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                Tambah produk
            </a>
            <a href="{{ url('/pegawai') }}" id="btn-atur-pegawai" class="btn btn-secondary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
                </svg>
                Atur pegawai
            </a>
            <button class="btn btn-ghost" id="btn-ekspor" data-modal-open="modal-ekspor">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Ekspor laporan
            </button>
        </div>

    </main>
</div>

{{-- ===== MODAL EKSPOR ===== --}}
<div class="modal-overlay" id="modal-ekspor" role="dialog" aria-modal="true" aria-labelledby="modal-ekspor-title">
    <div class="modal">
        <h2 class="modal__title" id="modal-ekspor-title">Ekspor laporan</h2>
        <p class="modal__body">Pilih format dan rentang tanggal untuk mengekspor data pesanan dan keuangan Anda.</p>
        <div class="form-group" style="margin-bottom:var(--space-4);">
            <label class="form-label" for="format-ekspor">Format</label>
            <select class="form-select" id="format-ekspor">
                <option value="pdf">PDF</option>
                <option value="excel">Excel (.xlsx)</option>
                <option value="csv">CSV</option>
            </select>
        </div>
        <div class="modal__actions">
            <button class="btn btn-ghost" data-modal-close id="btn-ekspor-batal">Batal</button>
            <button class="btn btn-primary" id="btn-ekspor-ok">Ekspor</button>
        </div>
    </div>
</div>

@endsection
