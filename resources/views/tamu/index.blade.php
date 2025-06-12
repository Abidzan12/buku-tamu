@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f2e9da !important;
        font-family: 'Segoe UI', sans-serif;
    }

    .guest-list-wrapper {
        max-width: 1000px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .guest-list-wrapper h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background-color: #e3d5c0;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    th {
        color: #4b4b4b;
        font-weight: bold;
    }

    .success-message {
        color: green;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .btn-delete {
        background-color: #dc2626;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-delete:hover {
        background-color: #b91c1c;
    }
</style>

<div class="guest-list-wrapper">
    <h1>Daftar Tamu</h1>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tamus as $index => $tamu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->email }}</td>
                    <td>{{ $tamu->pesan }}</td>
                    <td>
                        <form action="{{ route('tamu.hapusPesan', $tamu->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-delete">
                                Hapus Pesan
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
