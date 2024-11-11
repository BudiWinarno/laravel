@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Daftar Produk</h1>

        <a href="{{ route('index.create') }}" class="btn btn-primary"> CREATE </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama_depan }}</td>
                        <td>{{ $k->nama_belakang }}</td>

                        <td>

                            <a href="{{ route('index.edit', $k->id) }}" class="btn btn-sm btn-warning">edit</a>

                            <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>


                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
