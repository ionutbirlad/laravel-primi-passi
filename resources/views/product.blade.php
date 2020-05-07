@php
  $prodotti = config('products');
  $prodotto = $prodotti[$id];
@endphp


@extends('layouts.layout')

@section('titolo')
  {{$prodotto['titolo']}}
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('mainContent')
  <div class="container prodotto-singolo">
    <div class="titolo">
      <h1>{{$prodotto['titolo']}}</h1>
    </div>
    <div class="row">
      <div class="immagine-prodotto">
        <img src="{{$prodotto['src-h']}}" alt="">
      </div>
    </div>
    <div class="row">
      <div class="immagine-prodotto">
        <img src="{{$prodotto['src-p']}}" alt="">
      </div>
    </div>
    <div class="row">
      <div class="descrizione-prodotto">
        <p>{!!$prodotto['descrizione']!!}</p>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://kit.fontawesome.com/80a8b5f4b8.js" crossorigin="anonymous"></script>
@endsection
