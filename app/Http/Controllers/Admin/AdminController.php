<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\action;
use DB; use Datatables; use Validator;

class AdminController extends Controller
{
    protected $request;
    function __construct(Request $request)
    {
      $this->request = $request;
    }

    function index()
    {
      // $siswa = action::all();
      return view('admin/siswa',compact('halaman'));
    }

    function getSiswa(){
      $siswa = action::
            join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->select('siswa.*', 'kelas.*')
            ->get();

      // $siswa = DB::table('siswa')
      //       ->select('siswa.*')
      //       ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
      //       ->get();
      //
      // return response()->json($siswa);
      // dd($siswa);
      return DataTables::of($siswa)->addColumn('action', function($siswaa){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$siswaa->id_siswa.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="#" class="btn btn-xs btn-danger delete" id="'.$siswaa->id_siswa.'"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })->make(true);
    }

    function toSiswa() {
      return view('admin/siswa');
    }

    function store(Request $request)
    {
      // 1
      // $data = $request->all();
      // return $data;

      // 2
      // $siswa = new \App\action;
      // //Database      //name form
      // $siswa->fname = $request->fname;
      // $siswa->lname = $request->lname;
      // $siswa->id_kelas = $request->idkelas;
      // $siswa->save();

      //3
      // action::create($request->all());
      // return $request;

      // $fname->save();

       // $fname = $request->fname;
       //
       // $add_product = DB::table("siswa")->insert([
       //     'fname' => $fname,
       //     'id_kelas' => '1',
       //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
       //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
       // ]);

       //resorce/validation to custom message
       $validation = Validator::make($request->all(), [
           'nisn' => 'required|digits:10',
           'fname' => 'required|max:20',
           'lname'  => 'required|max:20',
           'email' => 'required|max:20',
           'phone'  => 'required|max:20',
           'dob' => 'required|max:20',
           'id_kelas'  => 'required',
       ]);

      $error_array = array();
      $success_output = '';
      if ($validation->fails())
      {
          foreach($validation->messages()->getMessages() as $field_name => $messages)
          {
              $error_array[] = $messages;
          }
      }
      else
      {
        if($request->get('button_action') == "insert")
        {
             $nisn = $request->nisn;//dari name
             $fname = $request->fname;
             $lname = $request->lname;
             $jk = $request->jk;
             $dob = $request->dob;
             $email = $request->email;
             $phone = $request->phone;
             $id_kelas = $request->id_kelas;
             
             $add_product = DB::table("siswa")->insert([
                 'nisn' => $nisn,
                 'fname' => $fname,
                 'lname' => $lname,
                 'jk' => $jk,
                 'dob' => $dob,
                 'email' => $email,
                 'phone' => $phone,
                 'id_kelas' => $id_kelas,
                 'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                 'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
             ]);

          // $student = new action([
          //     'fname' => $request->get('fname'),
          //     'lname' => $request->get('lname'),
          //     'id_kelas' => '1',
          //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
          //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
          // ]);
          // $student->save();
          $success_output = '<div class="alert alert-success">Data Inserted</div>';
        }
      }

      if($request->get('button_action') == 'update')
      {
          //Eloquent
          $student = action::find($request->get('id_siswa'));
          $student->nisn = $request->get('nisn');
          $student->fname = $request->get('fname');
          $student->lname = $request->get('lname');
          $student->jk = $request->get('jk');
          $student->dob = $request->get('dob');
          $student->email = $request->get('email');
          $student->phone = $request->get('phone');
          $student->id_kelas = $request->get('id_kelas');
          $student->updated_at = \Carbon\Carbon::now()->toDateTimeString();
          $student->save();
          $success_output = '<div class="alert alert-success">Data Updated</div>';
      }

       $output = array(
          'error'     =>  $error_array,
          'success'   =>  $success_output
      );
      echo json_encode($output);

     // return $request;
    }

    function fetchSiswa(Request $request)
    {
        $id = $request->input('id');
        $student = action::findorfail($id);
        $output = array(
            'fname'    =>  $student->fname,
            'lname'    =>  $student->lname,
            'dob'      =>  $student->dob,
            'jk'       =>  $student->jk,
            'email'    =>  $student->email,
            'phone'    =>  $student->phone,
            'nisn'     =>  $student->nisn,
        );
        echo json_encode($output);
    }

    function deleteSiswa(Request $request)
    {
        $student = action::find($request->input('id'));
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }

    function upload(Request $request)
    {
       $this->validate($request);
    }
    // function liveReload()
    // {
    //   $siswa = action::
    //         join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
    //         ->select('siswa.*', 'kelas.*')
    //         ->get();
    //   return view('admin/datatable',compact('siswa'));
    // }
    //
    // function testing()
    // {
    //     action::
    //         join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
    //         ->select('siswa.*', 'kelas.*')
    //         ->get();
    // }
}

?>
