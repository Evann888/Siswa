<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('library/animate.css/animate.min.css"')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('library/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('library/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('library/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('library/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('library/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('library/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('library/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('library/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('library/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('library/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('library/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('library/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('library/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('library/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    {{--  https://github.com/danielm/uploader--}}
    {{-- <link href="{{asset('library/fileuploader/src/css/jquery.dm-uploader.css')}}" rel="stylesheet"> --}}

    {{-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    <link href="{{asset('css/admin/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/test.css')}}" rel="stylesheet">

  </head>

{{-- INCLUDE BILA ISI FILENYA STATIS DAN MAU DIMASUKIN 1 FILE, YIELD BILA PER SECTION DAN BERUBAH TIAP FILE --}}

<body class="nav-md">
  <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            @include('adminSidebar');
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              @include('adminNavbar');
            </div>
          </div>
          <!-- /top navigation -->

          <!-- page content -->
          <div class="right_col" role="main">
            @yield('main');
          </div>
        </div>
    </div>
  @include('adminFooter');
  <!-- jQuery -->
  <script src="{{asset('library/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('library/jquery.tabledit/jquery.tabledit.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('library/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('library/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('library/nprogress/nprogress.js')}}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{asset('library/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('library/iCheck/icheck.min.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('library/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('library/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="{{asset('library/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
  <script src="{{asset('library/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
  <script src="{{asset('library/google-code-prettify/src/prettify.js')}}"></script>
  <!-- jQuery Tags Input -->
  <script src="{{asset('library/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
  <!-- Switchery -->
  <script src="{{asset('library/switchery/dist/switchery.min.js')}}"></script>
  <!-- Select2 -->
  <script src="{{asset('library/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- Parsley -->
  <script src="{{asset('library/parsleyjs/dist/parsley.min.js')}}"></script>
  <!-- Autosize -->
  <script src="{{asset('library/autosize/dist/autosize.min.js')}}"></script>
  <!-- jQuery autocomplete -->
  <script src="{{asset('library/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
  <!-- starrr -->
  <script src="{{asset('library/starrr/dist/starrr.js')}}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{asset('js/admin/custom.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('library/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('library/datatables.net-bs/js/dataTables.bootstrap.js')}}"></script>
  <script src="{{asset('library/datatables.net-buttons/js/dataTables.buttons.js')}}"></script>
  <script src="{{asset('library/datatables.net-buttons-bs/js/buttons.bootstrap.js')}}"></script>
  <script src="{{asset('library/datatables.net-buttons/js/buttons.flash.js')}}"></script>
  <script src="{{asset('library/datatables.net-buttons/js/buttons.html5.js')}}"></script>
  <script src="{{asset('library/datatables.net-buttons/js/buttons.print.js')}}"></script>
  <script src="{{asset('library/datatables.net-fixedheader/js/dataTables.fixedHeader.js')}}"></script>
  <script src="{{asset('library/datatables.net-keytable/js/dataTables.keyTable.js')}}"></script>
  <script src="{{asset('library/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
  <script src="{{asset('library/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('library/datatables.net-scroller/js/dataTables.scroller.js')}}"></script>
  {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}

  <script src="{{asset('library/jszip/dist/jszip.js')}}"></script>
  <script src="{{asset('library/pdfmake/build/pdfmake.js')}}"></script>
  <script src="{{asset('library/pdfmake/build/vfs_fonts.js')}}"></script>

  <script src="http://malsup.github.com/jquery.form.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        var table =  $('#datatable-responsive').DataTable({
             "bDestroy": true,
              "processing": true,
              "serverSide": true,
              "ajax": "{{ route('siswa/getsiswa') }}",
              "columns":[
                  { "data": "nisn" },
                  { "data": "fname" },
                  { "data": "lname" },
                  { "data": "dob" },
                  { "data": "jk" },
                  { "data": "nama_kelas" },
                  { "data": "jurusan" },
                  { "data": "phone" },
                  { "data": "email" },
                  { "data": "foto" },
                  { "data": "action", orderable:false, searchable:false },
              ]
          });

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $('#tambah_data').click(function(){
              $('.modal').modal('show');
              $('#formsiswa')[0].reset();
              $('#form_output').html('');
              $('#button_action').val('insert');
              $('.modal-title').text('Add Data');
          });

          $('#formsiswa').on('submit', function(event){
          event.preventDefault();
          var form_data = $(this).serialize();
          // var form_data2 = new FormData($(this)[0]);
          var form_data2 = new FormData();
          // formData.append('file', $('#fotosiswa')[0].files[0]);

          // var file_data = $("#userfile").prop("files")[0];
          var form_data3 = new FormData();
          form_data3.append("file", $( '#file' )[0].files[0]);

          $.ajax({
              url:"{{ route('siswa') }}",
              method:"POST",
              data:new FormData(this),
              dataType:"json",
              processData: false,
              contentType: false,
              // enctype: 'multipart/form-data',
              success:function(data)
              {
                // console.log(data);
                // alert('yey');
                  if(data.error.length > 0) //jika validasi error
                  {
                      var error_html = '';
                      for(var count = 0; count < data.error.length; count++)
                      {
                          error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                      }
                      $('#form_output').html(error_html);

                      setTimeout(function(){
                       document.getElementById("form_output").innerHTML="";
                       },3000);
                  }
                  else
                  {
                      // alert(JSON.stringify(data));
                      //SUPAYA HABIS EDIT BALIK INSERT LAGI
                      $('#form_output').html(data.success);
                      $('#formsiswa')[0].reset();
                      $('.modal-title').text('Add Data');
                      $('#button_action').val('insert');
                      setTimeout(function(){
                        document.getElementById("form_output").innerHTML="";
                       },3000);
                      table.ajax.reload();
                      // $('#datatable-responsive').DataTable().ajax.reload();
                  }
              }, error:function(data){
                   alert('begolu');
                   alert(JSON.stringify(data));
                   console.log('Error:', data);
               }
          }).done(function(data) {
            // if (data.result === true) {
            //     $("#form_output").html("<p>File Upload Succeeded</p>");
            // } else {
            //     $("#form_output").html("<p>File Upload Failed!</p>");
            // }
            // $("#form_output").append(data.message);
        console.log("PHP Output:");
        console.log( data );
    });
          });

          $(document).on('click', '.edit', function(){
              var id = $(this).attr("id"); //di AdminController/getsiswa
              // alert(id);

              $('#form_output').html(''); //kosongin data updated
              $.ajax({
                  url:"{{route('siswa/fetchsiswa')}}",
                  method:'get',
                  data:{id:id},
                  dataType:'json',
                  success:function(data)
                  {
                      $('#nisn').val(data.nisn);
                      $('#fname').val(data.fname);
                      $('#lname').val(data.lname);
                      $('#dob').val(data.dob);
                      $('#jk').val(data.jk);
                      $('#email').val(data.email);
                      $('#phone').val(data.phone);
                      $('#id_siswa').val(id);

                      $('.modal').modal('show');
                      // $('#action').val('Edit');
                      $('.modal-title').text('Edit Data');
                      $('#button_action').val('update');
                  }, error:function(data){
                       alert('begolu');
                       alert(JSON.stringify(data));
                       console.log('Error:', data);
                   }
              })
          });

          $(document).on('click', '.delete', function(){
              var id = $(this).attr("id"); //di AdminController/getsiswa
              // alert(id);

              swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  $.ajax({
                      url:"{{route('siswa/deletesiswa')}}",
                      method:'get',
                      data:{id:id},
                      success:function(data)
                      {
                         table.ajax.reload();
                      }, error:function(data){
                         alert('begolu');
                         alert(JSON.stringify(data));
                         console.log('Error:', data);
                       }
                  })
                  swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                  });
                } else {
                  swal("Data tidak jadi dihapus");
                }
              });
          });
        //
        //   $(document).on ("click", "#submitbtn", function (event) {
        //     var fname = $("#fname").val();
        //     event.preventDefault();
        //
        //     // var mytbl = $('#datatable-responsive');
        //     $.ajaxSetup({
        //       headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //       }
        //     });
        //     alert(fname);
        //
        //     $.ajax({
        //       type: "post",
        //       dataType: "text",
        //       data: "fname =" . fname,
        //       url: "{{--route('siswa')--}}",
        //       success:function(data){
        //         alert('hahaa');
        //         console.log(data);
        //         alert(JSON.stringify(data));
        //         // $("#msg").html("Product has been inserted");
        //         // $("#msg").fadeOut(2000);
        //
        //       },
              // error:function(data){
              //   alert('begolu');
              //   alert(JSON.stringify(data));
              //  console.log('Error:', data);
              // }
        //     });
        //     //
        //     // $.ajax({
        //     //   type: "get",
        //     //   url: "{{--route('siswo')--}}",
        //     // });
        // });
        //
        // setInterval(function(){
        //       $('.a').load('<?php echo url('siswad');?>').fadeIn("slow");
        //     },1000);

      //   $('#datatable-responsive').Tabledit({
      //     // url: 'example.php',
      //     eventType: 'dblclick',
      //     // editButton: false,
      //     columns: {
      //         identifier: [0, 'id'],
      //         editable: [[1, 'fname'], [2, 'color', '{"1": "Red", "2": "Green", "3": "Blue"}']]
      //     }
      // });

      // $('#datatable-responsive tbody').on( 'click', 'tr', function () {
      //     if ( $(this).hasClass('selected') ) {
      //         $(this).removeClass('selected');
      //     }
      //     else {
      //
      //         $(this).addClass('selected');
      //     }
      // } );
      //
      // $('#dlt_data').click( function () {
      //     table.row('.selected').remove().draw( false );
      // } );
    });

  </script>

    </body>
</html>
