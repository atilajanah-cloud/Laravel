@extends('layouts.main')

@section('title', 'Beranda - Website Pribadi')

@section('content')
<div class="page-header">
    <h1 class="page-title">Selamat Datang di Website Saya</h1>
    <p class="page-subtitle">Platform personal untuk berbagi profil, aktivitas terkini, dan informasi kontak.</p>
</div>

<!-- Kartu Hero Utama dengan Soft Gradient -->
<div class="card hero-card" style="margin-bottom: 28px;">
    <div class="hero-badge">✨ Profil & Portofolio</div>
    <h2 style="font-size: 1.45rem; margin-bottom: 12px; color: var(--text-main); font-weight: 700;">Halo, Saya Jannah Atila Saraswati! 👋</h2>
    <p style="color: var(--text-muted); margin-bottom: 22px; max-width: 680px; font-size: 1rem;">
        Terima kasih telah berkunjung. Website ini dirancang sebagai wadah informasi biodata diri, riwayat aktivitas terkini, serta sarana untuk terhubung secara langsung.
    </p>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="{{ route('datadiri') }}" class="btn btn-primary">Lihat Data Diri</a>
        <a href="{{ route('kontak') }}" class="btn btn-secondary">Hubungi Saya</a>
    </div>
</div>

<!-- Grid 3 Kartu dengan Karakter Pastel Masing-Masing -->
<div class="grid grid-3">
    <!-- Aktivitas: Aksen Amber/Kuning Hangat -->
    <div class="card card-accent-amber">
        <div class="card-header-pill pill-amber">
            <span>📋</span> Aktivitas
        </div>
        <p style="color: var(--text-muted); font-size: 0.925rem; margin-bottom: 16px; line-height: 1.6;">
            Catatan berbagai kegiatan rutin, eksplorasi belajar, dan proyek terkini yang sedang ditekuni.
        </p>
        <a href="{{ route('aktivitas') }}" class="card-link link-amber">Lihat Aktivitas &rarr;</a>
    </div>

    <!-- Data Diri: Aksen Mint/Emerald -->
    <div class="card card-accent-emerald">
        <div class="card-header-pill pill-emerald">
            <span>👤</span> Data Diri
        </div>
        <p style="color: var(--text-muted); font-size: 0.925rem; margin-bottom: 16px; line-height: 1.6;">
            Informasi lengkap biodata diri, latar belakang pendidikan, minat, serta keahlian utama.
        </p>
        <a href="{{ route('datadiri') }}" class="card-link link-emerald">Buka Biodata &rarr;</a>
    </div>

    <!-- Kontak: Aksen Violet/Indigo -->
    <div class="card card-accent-violet">
        <div class="card-header-pill pill-violet">
            <span>📬</span> Kontak
        </div>
        <p style="color: var(--text-muted); font-size: 0.925rem; margin-bottom: 16px; line-height: 1.6;">
            Saluran komunikasi aktif, nomor WhatsApp, alamat email, dan akun media sosial.
        </p>
        <a href="{{ route('kontak') }}" class="card-link link-violet">Kirim Pesan &rarr;</a>
    </div>
</div>
@endsection