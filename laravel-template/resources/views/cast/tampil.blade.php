@extends('layouts.master')

@section('title')
Halaman Tampil Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Bio</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->umur }}</td>
            <td>{{ $item->bio }}</td>
            <td>
                <a href="{{ route('cast.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('cast.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('cast.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection