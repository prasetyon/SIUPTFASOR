@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Reservations List</h1>
            <p class="lead">Here's a list of all reservations. <a href="{{ route('reservasi.create') }}">Add a new one?</a></p>
        <hr>
        @foreach($reservasi as $reservasi)
            <p>{{ $reservasi->id_lapangan }}</p>
            <p>{{ $reservasi->tanggal_sewa}}</p>
            <p>{{ $reservasi->waktu_mulai_sewa}}</p>
            <p>{{ $reservasi->waktu_selesai_sewa}}</p>
            <p>
                <a href="{{ route('reservasi.show', $reservasi->id_penyewaan) }}" class="btn btn-info">View Reservation</a>
                <a href="{{ route('reservasi.edit', $reservasi->id_penyewaan) }}" class="btn btn-primary">Edit Reservation</a>
            </p>
            <hr>
        @endforeach
    </div>

@stop