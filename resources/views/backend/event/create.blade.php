@extends('layouts.backend')
@section('title')
    Create Events
    @endsection
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Arctic Monkeys Events</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('event.index') }}" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
                        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Banner</label>
                                <input type="file" class="form-control" name="banner">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" value="{{ old('nama_event') }}" name="nama_event" id="exampleFormControlInput1" placeholder="masukkan nama event">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Event</label>
                                <input type="date" class="form-control"  value="{{ old('tanggal_event') }}" name="tanggal_event" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kapasitas</label>
                                <input type="number" class="form-control" value="{{ old('kapasitas') }}" name="kapasitas" id="exampleFormControlInput1" placeholder="masukkan kapasitas">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">HTM</label>
                                <input type="number" class="form-control" value="{{ old('htm') }}" name="htm" id="exampleFormControlInput1" placeholder="Harga Tiket Masuk">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
