@extends('layout.main')

@section('title', 'Dashboard - LMS')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                @include('dashboard.card1')
                {{-- Masukkan konten lainnya di sini --}}
            </div>
            <div class="col-md-4 order-md-2 pt-3">
                @include('dashboard.card')
                {{-- Masukkan konten lainnya di sini --}}
            </div>
        </div>
        {{-- @include('dashboard.card')
    @include('dashboard.table') --}}
    </div>

    <script>
        document.getElementById('logout').addEventListener('click', function() {
            fetch('/auth/logout', {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                },
            }).then(() => {
                alert('Logout berhasil');
                localStorage.removeItem('token');
                window.location.href = '/auth/login';
            });
        });
    </script>
@endsection
