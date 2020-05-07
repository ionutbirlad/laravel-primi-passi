<header>
  <div class="container">
    <div class="row">
      <img id="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="logo molisana">
    </div>
    <div class="row">
      <nav id="menu">
        <ul>
          <li class="{{(url() -> current() == route('home')) ? 'active' : ''}}"> <a href="{{route('home')}}">Home</a> </li>
          <li class="{{(url() -> current() == route('prodotti')) ? 'active' : ''}}"> <a href="{{route('prodotti')}}">Prodotti</a> </li>
          <li class="{{(url() -> current() == route('contatti')) ? 'active' : ''}}"> <a href="{{route('contatti')}}">Contatti</a> </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
