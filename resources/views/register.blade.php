@extends('layouts.app')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="front/images/bg/bg1.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">My Account</h3>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index-mp-layout1.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <form name="reg-form" class="register-form" method="post">
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Registrasi Untuk Persiapan Pranikah.</h4>
              </div>
              <hr>
              <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input name="form_name" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Email Address</label>
                  <input name="form_email" class="form-control" type="email">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_choose_username">Choose Username</label>
                  <input id="form_choose_username" name="form_choose_username" class="form-control" type="text">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="form_choose_password">Choose Password</label>
                  <input id="form_choose_password" name="form_choose_password" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Re-enter Password</label>
                  <input id="form_re_enter_password" name="form_re_enter_password"  class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection