@extends('layout/master')
@section('title', 'event')
@section('content')
    <form action="{{ route('event.update', ['event' => $barang->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Penyelenggara</label>
            <input type="text" class="form-control" name="nama_penyelenggara" id="exampleInputEmail1"
                value="{{ old('nama_penyelenggara', $event->nama_penyelenggara) }}" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('nama_event', $event->nama_event) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jadwal Event</label>
            <input type="text" class="form-control" name="jadwal_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('jadwal_event', $event->jadwal_event) }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Event</label>
            <input type="text" class="form-control" name="alamat_event" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ old('alamat_event', $event->alamat_event) }}">

        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="property">
                @foreach ($property as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_property }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="team">
                @foreach ($team as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_team }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $event->deskripsi) }}">
            <trix-editor input="deskripsi"></trix-editor>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
