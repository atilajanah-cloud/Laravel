@extends('layouts.main')

@section('title', 'Aktivitas - Website Pribadi')

@section('content')
<div class="page-header">
    <h1 class="page-title">Aktivitas & Kegiatan</h1>
    <p class="page-subtitle">Daftar kegiatan rutin dan proyek yang sedang dikerjakan.</p>
</div>

<div class="card card-accent-amber">
    <div class="card-header-pill pill-amber" style="margin-bottom: 22px;">
        <span>📋</span> Kegiatan & Fokus Terkini
    </div>
    <div class="activity-list">
        <div class="activity-item">
            <span class="activity-badge">Saat Ini</span>
            <div class="activity-details">
                <h3>Pengembangan Web dengan Laravel</h3>
                <p>Mempelajari blade templating, routing, dan pembuatan layout web yang efisien serta responsif.</p>
            </div>
        </div>

        <div class="activity-item">
            <span class="activity-badge">Proyek</span>
            <div class="activity-details">
                <h3>Desain Antarmuka Pengguna (UI/UX)</h3>
                <p>Merancang antarmuka web modern dengan CSS yang rapi, berfokus pada kemudahan navigasi dan pengalaman pengguna.</p>
            </div>
        </div>

        <div class="activity-item">
            <span class="activity-badge">Rutin</span>
            <div class="activity-details">
                <h3>Eksplorasi Teknologi Baru</h3>
                <p>Membaca dokumentasi, mengikuti perkembangan framework modern, serta meningkatkan kemampuan problem solving pemrograman.</p>
            </div>
        </div>
    </div>
</div>
@endsection