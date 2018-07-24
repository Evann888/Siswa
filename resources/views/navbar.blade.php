<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Belajar Laravel</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    @if($halaman == "home")
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
    @endif

    @if($halaman == "siswa")
      <li class="nav-item active">
        <a class="nav-link" href="{{url('daftar_siswa')}}">Daftar Siswa</a>
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('daftar_siswa')}}">Daftar Siswa</a>
      </li>
    @endif

    @if($halaman == "about")
    <li class="nav-item active">
      <a class="nav-link" href="{{url('about')}}">About</a>
    </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
      </li>
    @endif

    @if($halaman == "admin")
    <li class="nav-item active">
      <a class="nav-link" href="{{url('admin')}}">Admin</a>
    </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin')}}">Admin</a>
      </li>
    @endif

  </ul>
  <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>
</div>
</nav>
