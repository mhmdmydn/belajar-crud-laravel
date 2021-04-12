@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 my-4">
      <h1>Halaman Edit Article</h1>

      <form action="/article/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="title" value="{{$data->title}}">
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subjek</label>
          <input type="text" class="form-control" id="subject" name="subject" value="{{$data->subject}}">
        </div>

        @if ($errors->any())
        <div class=" alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <button type="submit" class="btn btn-primary ">Submit</button>
      </form>

    </div>
  </div>
</div>

@endSection