@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Courts List</h1>
            <p class="lead">Here's a list of all your courts. <a href="{{ route('courts.create') }}">Add a new one?</a></p>
        <hr>
        @foreach($courts as $courts)
            <p>{{ $courts->id_lapangan }}</p>
            <p>{{ $courts->tanggal_sewa}}</p>
            <p>{{ $courts->waktu_mulai_sewa}}</p>
            <p>{{ $courts->waktu_selesai_sewa}}</p>
            <p>
                <a href="{{ route('courts.show', $courts->id_penyewaan) }}" class="btn btn-info">View courts</a>
                <a href="{{ route('courts.edit', $courts->id_penyewaan) }}" class="btn btn-primary">Edit courts</a>
            </p>
            <hr>
        @endforeach
    </div>

@stop