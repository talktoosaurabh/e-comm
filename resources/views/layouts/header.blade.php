<?php
    use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Session;
    $total=0;
    if(Session::has('userSession'))
    {
        $total=ProductController::cartItem();
    }

?>

<nav class="navbar navbar-expand-lg navbar-dark nav-style">
    <a class="navbar-brand header-name ml-3" href="#">Shop Here</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse header-content" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link ml-4" href="#">Home </a>
        </li>
        <li class="nav-item ml-4 active">
          <a class="nav-link" href="/cartList">Cart<sup> ({{$total}})</sup></a>
        </li>

        @if(Session::has('userSession'))
            <li class="nav-item active ml-4">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        @else
            <li class="nav-item active ml-4">
                <a class="nav-link" href="/login">Login</a>
            </li>
        @endif

        <li class="nav-item ml-4 mr-5 active">
          <a class="nav-link" href="#">Support</a>
        </li>
      </ul>
    </div>
  </nav>
