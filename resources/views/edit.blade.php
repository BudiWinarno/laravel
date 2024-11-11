@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Edit Produk</h1>
        <form action="{{ route('index.update', $id->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan:</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{ $id->nama_depan }}">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang:</label>
                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ $id->nama_belakang }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection