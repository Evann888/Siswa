@extends('adminTemplate')

@section('main')
  <div class="page-title">
    <div class="title_left">
      <h3>Users <small>Some examples to get you started</small></h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

       <div class="x_title">
         <h2>Responsive example<small>Users</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="#">Settings 1</a>
               </li>
               <li><a href="#">Settings 2</a>
               </li>
             </ul>
           </li>
           <li><a class="close-link"><i class="fa fa-close"></i></a>
           </li>
         </ul>
         <div class="clearfix"></div>
       </div>
        <div class="x_content">
           <p class="text-muted font-13 m-b-30">
             Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
           </p>



          {{-- <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> --}}
                    {{-- <div id="a"> --}}

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap a" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>NISN</th>
                          <th>Nama awal</th>
                          <th>Nama akhir</th>
                          <th>Date of Birth</th>
                          <th>Jenis Kelamin</th>
                          <th>Kelas(absen)</th>
                          <th>Jurusan</th>
                          <th>Nomor Telepon</th>
                          <th>E-mail</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($siswa as $u)
                        <tr>
                            <td>{{$u->fname}}</td>
                            <td>{{$u->lname}}</td>
                            <td>{{$u->dob}}</td>
                            <td>{{$u->jk}} ({{$u->jurusan}})</td>
                            <td>{{$u->nama_kelas}}</td>
                            <td>{{$u->jurusan}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->email}}</td>
                        </tr>
                       @endforeach --}}
                     </tbody>
                    </table>
                        {{-- @include('admin/datatable'); --}}
                    {{-- </div> --}}
           {{-- </table> --}}

           <!-- Large modal -->
           <button type="button" id="tambah_data" class="btn btn-primary" data-toggle="modal">Tambah Siswa</button>

           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
             <div class="modal-dialog modal-lg">
               <div class="modal-content">

                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                   </button>
                   <h4 class="modal-title" id="myModalLabel">Tambah Siswa</h4>
                 </div>
                 <div class="modal-body">
                   <span id="form_output"></span>

                   <form id="formsiswa" class="form-horizontal form-label-left input_mask" method="POST">
                     <div class="col-md-offset-3 col-sm-6 col-xs-12">
                       <label class="col-md-2 col-sm-2 col-xs-12">NISN*</label>
                          <div class="col-md-10 col-sm-10 col-xs-12 form-group has-feedback">
                            <input autofocus type="text" name="nisn" class="form-control" id="nisn" >
                          </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="fname" class="form-control has-feedback-left" id="fname" placeholder="First Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="email" class="form-control has-feedback-left" id="email" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label class="col-md-2 col-sm-2 col-xs-12">Date Of Birth *</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12 ">
                          <input id="dob" class="date-picker form-control col-md-7 col-xs-12"  type="date"  name="dob" placeholder="mm-dd-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}" min='' max=''>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Kelas</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select id="id_kelas" name="id_kelas" class="select2_group form-control">
                            <optgroup label="X">
                              <option value="1">A</option>
                              <option value="2">B</option>
                              <option value="3">C</option>
                            </optgroup>
                            <optgroup label="XI">
                              <option value="4">A</option>
                              <option value="5">B</option>
                              <option value="6">C</option>
                            </optgroup>
                            <optgroup label="XII">
                              <option value="7">A</option>
                              <option value="8">B</option>
                              <option value="9">C</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>

                      {{-- <div class="form-group">
                       <label class="control-label col-md-1 col-sm-1 col-xs-12" for="number">Number <span class="required">*</span>
                       </label>
                       <div class="col-md-5 col-sm-5 col-xs-12">
                         <input class="form-control col-md-7 col-xs-12"  type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                       </div>
                     </div> --}}


                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label class="col-md-2 col-sm-2 col-xs-12">Gender*</label>
                          <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                             <p>
                               M
                               <input type="radio" class="flat" name="jk" id="genderM" value="Laki-Laki" checked="" required />
                               F
                               <input type="radio" class="flat" name="jk" id="genderF" value="Perempuan" required />
                             </p>
                           </div>
                       </div>

                       <div class="col-md-4">
                         <label class="control-label">Upload foto(jpg,png,jpeg | tidak wajib)</label>
                           <input type="file" name="gambar">
                       </div>

                      {{-- <input type="hidden" name="id_kelas" value="1"> --}}
                      <input type="hidden" name="button_action" id="button_action" value="insert" />
                      <input type="hidden" name="id_siswa" id="id_siswa"/>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      {{-- <div class="ln_solid"></div> --}}
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button id="submitbtn" type="submit" class="btn btn-primary">Save changes</button>
                 </div>
                  </form>
               </div>
             </div>
           </div>
          </div>
        </div>

      </div>
    </div>
@stop
