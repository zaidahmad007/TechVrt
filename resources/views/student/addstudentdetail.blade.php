@extends('layout')
@section('content')



<style>
    .outer-container{
        background: white;
    }
</style>


<!-- Mirrored from html.commonsupport.xyz/2018/Moran/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 07:03:20 GMT -->




<div class="page-wrapper">

    @if(Session::has('msg'))

    <p class="alert
    {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('msg') }}</p>

    @endif
    <!-- Preloader -->
    <div class="preloader"></div>

    <div class="header-span"></div>

    <!-- Main Header-->


    <!--End Main Header -->

    <!-- Hidden Navigation Bar -->

    <!-- End / Hidden Bar -->

    <!-- page title -->


    <!--Contact Section-->
    <section class="contact-section sp-three">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Info Column-->


                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">

                    <!--Map Section-->
                    <section class="map-section">
                        <!--Map Outer-->
                        <div >
                            <img src="{{asset('images/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg')}}">
                        </div>

                    </section>
                    <!--End Map Section-->
                </div>
                <div class="col-md-7 col-md-offset-5 col-sm-12">
                    <!-- contact Form -->
                    <div class="contact-form">
                        <h2>Fill Correct Detail</h2>
                        <!--contact Form-->

  <form action="/studentdetail" method="POST">
    @csrf
    <div class="form-group">
        <label for="state">State:</label>
        <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
      </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="City" placeholder="Enter City" name="City">
    </div>
    <div class="form-group">
        <label for="District">District:</label>
        <input type="text" class="form-control" id="District" placeholder="Enter District" name="District">
      </div>
        <div class="form-group">
            <label for="pincode">pincode:</label>
            <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode">
          </div>
        <div class="form-group">
          <label for="collegecode">collegecode:</label>
          <input type="text" class="form-control" id="collegecode" placeholder="Enter collegecode" name="collegecode">
        </div>
        <div class="form-group">
            <label for="college">college:</label>
            <input type="text" class="form-control" id="college" placeholder="Enter college" name="college">
          </div>
        <div class="form-group">
            <label for="mname">Mother Name:</label>
            <input type="text" class="form-control" id="mothername" placeholder="Enter mothername" name="mname">
          </div>
        <div class="form-group">
          <label for="fname">Father Name:</label>
          <input type="text" class="form-control" id="fname" placeholder="Enter Father name" name="fname">
        </div>

          <div class="form-group">
            <label for="board">board</label>
            <input type="text" class="form-control" id="board" placeholder="Enter board" name="board">
          </div>
          <div class="form-group">
            <label for="branch">Branch</label>
            <input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch">
          </div>
          <div class="form-group">
            <label for="standard">standard</label>
            <input type="text" class="form-control" id="standard" placeholder="Enter standard" name="standard">
          </div>
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>


                    </div>
                    <!--End Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->



    <!-- subscribe section -->

    @endsection
