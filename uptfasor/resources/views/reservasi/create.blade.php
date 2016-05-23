@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Make a Reservation</h1>
        <p class="lead">Add reservation</p>
        <hr>
    </div>
    
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    {!! Form::open([
    'route' => 'reservasi.store'
    ]) !!}

    <div class="form-group">
        {!! Form::label('id_lapangan', 'ID Lapangan:', ['class' => 'control-label']) !!}
        {!! Form::text('id_lapangan', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tanggal_sewa', 'Tanggal Sewa:', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_sewa', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('waktu_mulai_sewa', 'Waktu Mulai Sewa:', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_mulai_sewa', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('waktu_selesai_sewa', 'Waktu Selesai Sewa:', ['class' => 'control-label']) !!}
        {!! Form::time('waktu_selesai_sewa', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Reservation', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop