
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- <- bootstrap css --}}
    <title>@yield('title','Laravel 5.8 Basics')</title>
<style>
.alert{
    z-index: 99;
    top: 60px;
    right:18px;
    min-width:30%;
    position: fixed;
    animation: slide 0.5s forwards;
}
@keyframes slide {
    100% { top: 30px; }
}
@media screen and (max-width: 668px) {
    .alert{ /* center the alert on small screens */
        left: 10px;
        right: 10px; 
    }
}
</style>
</head>
<body>
    {{-- That's how you write a comment in blade --}}
    
    @include('inc.navbar')
    
    <main class="container mt-4">
        @yield('content')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('pages.index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.about')}}" class="nav-link">About</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
  <li class="nav-item">
      <a href="{{route('todos.index')}}" class="nav-link">Todos</a>
  </li>
  <li class="nav-item">
      <a href="{{route('todos.create')}}" class="nav-link">New Todo</a>
  </li>
</ul>
        </div>
    </div>
</nav>
    </main>
    @include('inc.footer')
    <script src="{{asset('js/app.js')}}"></script> {{-- <- bootstrap and jquery --}}
    

@if(session('status')) {{-- <- If session key exists --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}} {{-- <- Display the session value --}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<script>
    //close the alert after 3 seconds.
    $(document).ready(function(){
       setTimeout(function() {
          $(".alert").alert('close');
       }, 3000);
    });
</script>
</body>
</html>