@extends('layouts.main')

@section('title', 'Data Diri - Website Pribadi')

@section('content')
<div class="page-header">
    <h1 class="page-title">Data Diri</h1>
    <p class="page-subtitle">Informasi biodata pribadi, latar belakang, dan keahlian.</p>
</div>

<div class="card card-accent-emerald">
    <div class="card-header-pill pill-emerald" style="margin-bottom: 20px;">
        <span>👤</span> Biodata Pribadi
    </div>
    <table class="info-table">
        <tbody>
            <tr>
                <td class="label">Nama Lengkap</td>
                <td class="value"><strong>Jannah Atila Saraswati</strong></td>
            </tr>
            <tr>
                <td class="label">Minat</td>
                <td class="value">Web Developer</td>
            </tr>
            <tr>
                <td class="label">Tempat, Tanggal Lahir</td>
                <td class="value">Wonosobo 16 April 2006</td>
            </tr>
            <tr>
                <td class="label">Keahlian Utama</td>
                <td class="value">Phyton, Laravel, HTML, MySQL</td>
            </tr>
            <tr>
                <td class="label">Status</td>
                <td class="value">Mahasiswa</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection