@extends('layouts.master')

@section('title')
Halaman Detail Cast
@endsection

@section('content')
    
<h1>{{$cast->nama}}</h1>
<h2>{{$cast->umur}}</h2>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-primary` btn-sm">Kembali</a>

@endsection