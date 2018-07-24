<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\action;

class SiswaController extends Controller
{
    function index()
    {
      // $siswa = ["Andi","Dedi","Budi","Faris"];
      // $halaman = 'siswa';
      $siswa = action::all();
      return view('siswa/daftar_siswa',compact('halaman','siswa'));
    }
}
?>
