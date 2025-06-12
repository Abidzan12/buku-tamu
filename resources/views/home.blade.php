@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f2e9da;
        font-family: Georgia, serif;
        text-align: center;
    }

    header.wedding-header {
        background-color: #2f2f4f;
        padding: 15px 0;
        color: white;
        font-style: italic;
        margin-bottom: 40px;
    }

    .wedding-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 70vh;
    }

    .wedding-container img {
        width: 400px;
        height: 400px;
        border-radius: 15%;
        object-fit: cover;
        border: 5px solidrgb(0, 0, 0);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        margin-bottom: 20px;
    }

    .wedding-name {
        font-size: 2rem;
        font-weight: bold;
        color: #222;
        margin-bottom: 10px;
    }

    .wedding-date {
        color: #444;
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    .btn-pesan {
        padding: 10px 20px;
        background-color: #2f2f4f;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-pesan:hover {
        background-color: #1e1e38;
    }
</style>

<header class="wedding-header">
    <h2>Together in Love, Forever in Promise</h2>
</header>

<div class="wedding-container">
    <img src="{{ asset('images/pengantin.jpg') }}" alt="Pengantin" />
    <div class="wedding-name">Reki & Reyhan </div>
    <p class="wedding-date">Senin, 02 Juni 2025</p>
    <a href="{{ route('tamu.create') }}" class="btn-pesan">Kirim Pesan</a>
</div>
@endsection
