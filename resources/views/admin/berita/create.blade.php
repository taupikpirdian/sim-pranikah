@extends('layouts.admin')

@section('content')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Create Berita
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                {{ Form::open(array('url' => '/news/create', 'files' => true, 'method' => 'post')) }}
                 
                    <div class="form-group clearfix{{ $errors->has('judul') ? ' has-error' : '' }}">
                      {{ Form::label("title", "Judul *", ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                        </div>
                        @if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                        {{ Form::label("desc", "Deskripsi *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <textarea type="text" id="ckeditor" name="desc" value="{{ old('deskripsi') }}" class="form-control article-ckeditor" required="required", placeholder= "Masukan Deskripsi" rows="4"></textarea>
                          </div>
                          @if ($errors->has('deskripsi'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('deskripsi') }}</strong>
                              </span>
                          @endif
                      </div>
                   
                     <div class='form-group clearfix'>
                      {{ Form::label("img", "Images", ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-12'>
                          <input type="file" id="img" name="img" class="validate" value="{{ old('img') }}"  required="required" >
                            <span class="error"></span>
                        </div>
                    </div>

                    <div class='form-group'>
                    <div class='col-md-4 col-md-offset-4'>
                      <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </div>

@endsection
