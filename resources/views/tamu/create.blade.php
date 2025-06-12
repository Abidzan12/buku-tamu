@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f2e9da !important;
    }

    .form-wrapper {
        max-width: 500px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .form-wrapper h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .form-wrapper label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-wrapper input,
    .form-wrapper textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
    }

    .form-wrapper button {
        width: 100%;
        padding: 10px;
        background-color: #4B352A;
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .form-wrapper button:hover {
        background-color: black;
    }

    .form-wrapper a {
        color: #2563eb;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    .form-wrapper a:hover {
        text-decoration: underline;
    }
</style>

<div class="form-wrapper">
    <h2>Tuliskan Identitas Anda</h2>

    <form action="{{ route('tamu.store') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" id="pesan" rows="4" required></textarea>

        <button type="submit">Simpan</button>
    </form>

    <div style="text-align: center;">
        <a href="{{ route('tamu.index') }}">&larr; Kembali ke Daftar Tamu</a>
    </div>
</div>
@endsection
