
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap a" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Nama awal</th>
      <th>Nama akhir</th>
      <th>Date of Birth</th>
      <th>Jenis Kelamin</th>
      <th>Kelas(absen)</th>
      <th>Jurusan</th>
      <th>Nomor Telepon</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswa as $u)
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
   @endforeach
  </tbody>
</table>
