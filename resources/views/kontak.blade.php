@extends('layouts.main')

@section('title', 'Kontak - Website Pribadi')

@section('content')
<div class="page-header">
    <h1 class="page-title">Kontak Saya</h1>
    <p class="page-subtitle">Hubungi saya melalui informasi kontak atau formulir di bawah ini.</p>
</div>

<div class="grid grid-2">
    <!-- Informasi Kontak (Aksen Violet) -->
    <div class="card card-accent-violet">
        <div class="card-header-pill pill-violet" style="margin-bottom: 20px;">
            <span>📬</span> Informasi Kontak
        </div>
        <table class="info-table">
            <tbody>
                <tr>
                    <td class="label">Email</td>
                    <td class="value">atilajanah@gmail.com</td>
                </tr>
                <tr>
                    <td class="label">Telepon / WA</td>
                    <td class="value">+62 822-2138-4691</td>
                </tr>
                <tr>
                    <td class="label">Lokasi</td>
                    <td class="value">Indonesia</td>
                </tr>
                <tr>
                    <td class="label">Instagram</td>
                    <td class="value">@jnnhatila_</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Formulir Pesan -->
    <div class="card">
        <div class="card-header-pill pill-violet" style="margin-bottom: 20px;">
            <span>✉️</span> Kirim Pesan
        </div>
        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan Anda berhasil dikirim (simulasi)!');">
            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="nama@email.com" required>
            </div>
            <div class="form-group">
                <label class="form-label">Pesan</label>
                <textarea class="form-control" rows="3" placeholder="Tuliskan pesan Anda..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection