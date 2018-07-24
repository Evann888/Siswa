<!DOCTYPE html>
<html>
<html lang="en">
  <head>
    <title>Laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <head>

{{-- INCLUDE BILA ISI FILENYA STATIS DAN MAU DIMASUKIN 1 FILE, YIELD BILA PER SECTION DAN BERUBAH TIAP FILE --}}
  <body>
    <?php
      $halaman = '';
      if(Request::segment(1) == 'daftar_siswa'){
        $halaman ='siswa';
      } elseif (Request::segment(1) == 'about') {
        $halaman ='about';
      } elseif (Request::segment(1) == '') {
        $halaman ='home';
      }
    ?>
    @include('navbar')

    <div class="container-fluid">

      @yield('main') <!--//membuat potongan kode yang disebut section yg namanya main -->
    </div>



      @yield('footer')
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
