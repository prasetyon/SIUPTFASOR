@extends('admin.app')

@section('content')

    <div class="container">
        <h1>Courts List</h1>
            <p class="lead">Here's the list of all courts. <a href="{{ route('courts.create') }}">Add a new one?</a></p>
        <hr>
        @foreach($courts as $courts)
            <p>{{ $courts->id_lapangan }}</p>
            <p>{{ $courts->nama_lapangan}}</p>
            <p>{{ $courts->harga_siang}}</p>
            <p>{{ $courts->harga_malam}}</p>
            <p>
                <a href="{{ route('courts.show', $courts->id_penyewaan) }}" class="btn btn-info">View Courts</a>
                <a href="{{ route('courts.edit', $courts->id_penyewaan) }}" class="btn btn-primary">Edit Courts</a>
            </p>
            <hr>
        @endforeach
    </div>

@stop