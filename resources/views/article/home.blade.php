@extends('layouts.app')


@section('content')
<div class="container text-center mb-5">
  <h1>Article Dummy</h1>
  <a href="/article/create" class="btn btn-primary">Tambah Artikel</a>
</div>


@foreach ($data as $datas)
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3">
        <div class="card-body">
          <h5>Judul : {{$datas->title}}</h5>
          <p>{{$datas->subject}}</p>
          <a href="/article/{{$datas->id}}/edit" class="btn btn-success btn-sm">Edit</a>
          <a href="/article/{{$datas->title}}" class="btn btn-sm btn-info text-white">Baca</a>
          <form action="/article/{{$datas->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm my-4">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach


@endSection