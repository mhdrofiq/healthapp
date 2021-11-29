<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
    <title>Navbar</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/navbar-top.css')}}" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('home')}}">CareWear</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <!--put this is in class to highlight current page: active" aria-current="page"-->
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('evaluate')}}">Evaluate Condition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('record')}}">Data Record</a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{route('logout')}}">
          @csrf
          <button class="nav-link dropdown-item" type="submit" style="background-color: transparent;">Logout</button>
          </form>
        </li>
        
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>
<!--
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</main>
-->

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
