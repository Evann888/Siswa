@extends('template')

@section('main')
  <div id="about">
    {!! Form::open(['url' => 'siswa']) !!}
    {!! Form::number('name', 'value') !!}

    <h2>About</h2>
    <p>Develop by ~8NVM8~</p>
  </div>
@stop

@section('footer')
<div id="footer">
  <p>&copy 2018 ~8NVM8~</p>
</div>
@stop

</div>
