@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$data->title}}</h1>
      <p>{{$data->subject}}</p>
      <small> Created at : {{$data->created_at}}</small>

    </div>
    <a href="/" class="btn btn-primary btn-sm">
      Kembali
    </a>
  </div>
</div>

@endSection