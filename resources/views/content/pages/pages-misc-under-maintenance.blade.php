@extends('layouts/blankLayout')

@section('title', 'Under Maintenance - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss'])
@endsection

@section('content')
<!--Under Maintenance -->
<div class="misc-wrapper">
  <h4 class="mb-2 mx-2">Under Maintenance! 🚧</h4>
  <p class="mb-10 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
  <div class="d-flex justify-content-center mt-5">
    <img src="{{asset('assets/img/illustrations/tree-3.png')}}" alt="misc-tree" class="img-fluid misc-object d-none d-lg-inline-block">
    <img src="{{asset('assets/img/illustrations/misc-mask-light.png')}}" alt="misc-error" class="scaleX-n1-rtl misc-bg d-none d-lg-inline-block" height="172">
    <div class="d-flex flex-column align-items-center">
      <img src="{{asset('assets/img/illustrations/misc-under-maintenance.png')}}" alt="misc-error" class="img-fluid z-1" width="780">
      <div>
        <a href="{{url('/')}}" class="btn btn-primary text-center my-12">Back to home</a>
      </div>
    </div>
  </div>
</div>
<!-- /Under Maintenance -->
@endsection