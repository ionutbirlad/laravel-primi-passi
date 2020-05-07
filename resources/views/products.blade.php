@php

$lunga = [];
$corta = [];
$cortissima = [];

foreach (config('products') as $key => $prodotto) {
  if ($prodotto['tipo'] == 'lunga') {
    $lunga[$key] = $prodotto;
  } elseif ($prodotto['tipo'] == 'corta') {
    $corta[$key] = $prodotto;
  } elseif ($prodotto['tipo'] == 'cortissima') {
    $cortissima[$key] = $prodotto;
  }
}

// dd($lunga, $corta, $cortissima);
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
    @if (!empty($lunga))
      <div class="titolo">
        <h2>La lunga</h2>
      </div>
      <div class="row lunga">
          @foreach ($lunga as $key => $prodotto)
            <div class="card">
              <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
              <div class="overlay">
                <a href="{{route('prodotti.singolo', $key)}}">
                  <svg>
                    <use href="#posate"></use>
                  </svg>
                </a>
                {{-- <a href="{{$key}}"><h3>{{$prodotto['titolo']}}</h3></a> --}}
              </div>
            </div>
          @endforeach
      </div>
    @endif

    @if (!empty($corta))
      <div class="titolo">
        <h2>La corta</h2>
      </div>
      <div class="row corta">
          @foreach ($corta as $key => $prodotto)
            <div class="card">
              <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
              <div class="overlay">
                <a href="{{route('prodotti.singolo', $key)}}">
                  <svg>
                    <use href="#posate"></use>
                  </svg>
                </a>
                {{-- <a href="{{$key}}"><h3>{{$prodotto['titolo']}}</h3></a> --}}
              </div>
            </div>
          @endforeach
      </div>
    @endif

    @if (!empty($cortissima))
      <div class="titolo">
        <h2>La cortissima</h2>
      </div>
      <div class="row cortissima">
          @foreach ($cortissima as $key => $prodotto)
            <div class="card">
              <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
              <div class="overlay">
                <a href="{{route('prodotti.singolo', $key)}}">
                  <svg>
                    <use href="#posate"></use>
                  </svg>
                </a>
                {{-- <a href="{{$key}}"><h3>{{$prodotto['titolo']}}</h3></a> --}}
              </div>
            </div>
          @endforeach
      </div>
    @endif
  </div>
@endsection

@section('scripts')
  <script src="https://kit.fontawesome.com/80a8b5f4b8.js" crossorigin="anonymous"></script>
@endsection
