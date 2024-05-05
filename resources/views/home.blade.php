<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body style="background-color: #adc0d4;">
    @extends('layouts.app')
    @section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border mb-4">
            <div class="d-flex flex-column align-items-center me-5">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/fotoku.jpg') }}" alt="image">
                <h5><i class="bi-person-fill me-2"></i>VARHAN FIQIH NAUFALDY</h5>
                <p><i class="bi-card-fill me-2"></i>Mahasiswa Sistem Informasi 2022</p>
                <button class="btn btn-primary">Ubah Profil</button>
            </div>
            <div>
                <h5><i class="bi-info-circle-fill me-2"></i>About Me</h5>
                <p><strong><i class="bi-person-fill me-2"></i>Nama:</strong> Varhan Fiqih Naufaldy</p>
                <p><strong><i class="bi-person-badge-fill me-2"></i>NIM:</strong> 1204220115</p>
                <p><strong><i class="bi-people-fill me-2"></i>Kelas:</strong> IS-05-04</p>
                <p><strong><i class="bi-building-fill me-2"></i>Institusi:</strong> Telkom University Surabaya</p>
                <p><strong><i class="bi-geo-alt-fill me-2"></i>Prodi:</strong> Sistem Informasi</p>
            </div>
        </div>
    </div>

    @endsection
    @vite('resources/js/app.js')
</body>

</html>
