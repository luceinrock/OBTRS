<!-- navbar-->
<header class="header">


  <nav class="navbar navbar-expand-lg sticky-top">
    {{-- container --}}
    <div class="container">
      {{-- Brand Logo --}}
      <a href="{{ route('home') }}" class="navbar-brand home">
        <img style="height: 50px; width: 50px" src="{{ asset('img/logo.png') }}" alt="Redbus logo"
          class="d-none d-md-inline-block">
        <img style="height: 50px; width: 50px" src="{{ asset('img/logo.png') }}" alt="Redbus logo"
          class="d-inline-block d-md-none">
      </a>


      {{-- Collapse font awesome icons --}}
      <div class="navbar-buttons">
        {{-- collapse navication --}}
        <button type="button" data-toggle="collapse" data-target="#navigation"
          class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation icon</span><i
            class="fa fa-align-justify"></i></button>
      </div>

      {{-- Main navication menus --}}
      <div id="navigation" class="collapse navbar-collapse">







        {{-- main navication ul --}}
        <ul class="navbar-nav mr-auto">

          {{-- home menu --}}
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
          {{-- novel menu --}}
          <li class="nav-item"><a href="{{ route('novel') }}" class="nav-link">Novel</a></li>

          {{-- islamic book menu --}}
          <li class="nav-item"><a href="{{ route('islamic') }}" class="nav-link
              ">Islamic Book</a></li>

          {{-- bestseller menu --}}
          {{-- <li class="nav-item"><a href="{{ route('bestseller') }}" class="nav-link @if($activePage == "bestseller")
          active @endif">Best Seller</a></li> --}}

          {{-- contact menu --}}
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>

          {{-- about us menu --}}
          <li class="nav-item"><a href="{{ route('about-us') }}" class="nav-link">About Us</a></li>

        </ul>

      </div>
      {{-- Main navication menus --}}

    </div>
    {{-- END container --}}
  </nav>

</header>