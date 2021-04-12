@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 my-4">
      <h1>Halaman Tambah Article</h1>

      <form action="/article" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subjek</label>
          <input type="text" class="form-control" id="subject" name="subject">
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
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