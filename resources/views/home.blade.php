@extends('layouts/eonesia/b-n/master') @section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
    @include('layouts.eonesia.b-n.patrials._flash')
    {{--  <div class="row">
      <div class="col-lg-12">
        <div class="card oh">
          <div class="card-body bg-light">
            <div class="row text-center m-b-20">
              <div class="col-lg-3 col-md-3 m-t-20">
                <h2 class="m-b-0 font-light"></h2>
                <span class="text-muted">EVENT TERSEDIA</span>
              </div>
              <div class="col-lg-3 col-md-3 m-t-20">
                <h2 class="m-b-0 font-light"></h2>
                <span class="text-muted">EVENT SELESAI</span>
              </div>
              <div class="col-lg-3 col-md-3 m-t-20">
                <h2 class="m-b-0 font-light"></h2>
                <span class="text-muted">MEMBER TERVERIFIKAS</span>
              </div>
              <div class="col-lg-3 col-md-3 m-t-20">
                <h2 class="m-b-0 font-light"></h2>
                <span class="text-muted">KOTA</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}
    @if(Auth::user()->role_id != 3)
    @include('pic')
    @else
    @include('sales')
    @endif
  </div>
</div>
@if(Auth::user()->role_id != 3)
{!! Charts::scripts() !!}
{!! $chart->script() !!} 
@endif
 @endsection
