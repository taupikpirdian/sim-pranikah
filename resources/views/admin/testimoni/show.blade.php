@extends('layouts.admin')
@section('content')
<section class="content-header">
    <h1>
      Testimoni
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{URL::to('/testimony/index')}}">Daftar nama</a></li>
      </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          <tr>
              <td width="200px">Nama</td>
              <td>
                {{{$testimony->title}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Deskripsi</td>
              <td>
                {{{$testimony->desc}}}
              </td>
          </tr>
        </table>
        <p align="center">
          <a href="{{URL::to('testimony/index')}}" class="btn btn-primary" role="button">kembali</a>
          </p>
      </div>
    </div>
  </section>
@endsection