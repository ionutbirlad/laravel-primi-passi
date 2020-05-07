@php
  $prodotti = config('products');
  $prodotto = $prodotti[$id];
@endphp


@extends('layouts.layout')

@section('titolo')
  Primi passi Laravel
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('mainContent')
  <div class="container">
      <div class="titolo">
        <h2>La lunga</h2>
      </div>
      <div class="row">
        <h3>{{$prodotto['titolo']}}</h3>
      </div>
  </div>
@endsection

@section('scripts')
  <script src="https://kit.fontawesome.com/80a8b5f4b8.js" crossorigin="anonymous"></script>
@endsection
